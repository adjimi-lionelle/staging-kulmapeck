<?php

namespace App\Controller\Front;

use App\Entity\Exam;
use App\Repository\CategorieRepository;
use App\Repository\ClasseRepository;
use App\Repository\ExamRepository;
use App\Repository\PersonneRepository;
use App\Repository\SkillLevelRepository;
use App\Repository\UserRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExamController extends AbstractController
{
    #[Route('/exams', name: 'app_front_exam_index')]
    public function index(Request $request, CategorieRepository $categorieRepository, SkillLevelRepository $skillLevelRepository, ClasseRepository $classeRepository, ExamRepository $examRepository, PaginatorInterface $paginatorInterface): Response
    {
        $categoryName = $request->query->get('category') === 'all' ? null : $request->query->get('category');
        $classeName = $request->query->get('classe') === 'all' ? null : $request->query->get('classe');
        $skillName = $request->query->get('skill') === 'all' ? null : $request->query->get('skill');
        $language = $request->query->get('language') === 'all' ? null : $request->query->get('language');
        $category = $categorieRepository->findOneBy(['slug' => $categoryName]);
        $classe = $classeRepository->findOneBy(['slug' => $classeName]);
        $skillLevel = $skillLevelRepository->findOneBy(['slug' => $skillName]);

        $exams = $examRepository->findByFilter($language, $category, $classe, $skillLevel);

        return $this->render('front/exam/index.html.twig', [
            'isExamPage' => true,
            'exams' => $paginatorInterface->paginate($exams, $request->query->getInt('page', 1), 10),
            'categories' => $categorieRepository->findAll(),
            'classes' => $classeRepository->findAll(),
            'skillLevels' => $skillLevelRepository->findAll(),
            'sCategory' => $category,
            'sClasse' => $classe,
            'language' => $language,
            'skillLevel' => $skillLevel,
            
        ]);
    }

    #[Route('/exam/{reference}/show', name: 'app_front_exam_show')]
    public function show(Request $request, Exam $exam, PersonneRepository $personneRepository): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $personne = $personneRepository->findOneBy(['utilisateur' => $this->getUser()]);

        if (!$personne) {
            throw $this->createAccessDeniedException();
        }

        $eleve = $personne->getUtilisateur()->getEleve();
        if ($eleve && !$eleve->isIsPremium()) {
            throw $this->createAccessDeniedException("Vous devez être premium!");
        }

        return $this->render('front/exam/show.html.twig', [
            'exam' => $exam,
            'isExamPage' => true,
            'display' => $request->query->get('display', 'subject'),
            'data' => $request->query->get('display', 'subject') === 'correction' ? $exam->getCorrection() : $exam->getSujet(),
            
        ]);
    }
    
    #[Route('/exam/file/{filename}', name: 'app_exam_file')]
    public function servePdfFile(Request $request, string $filename): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        
        // Validate file extension
        if (!str_ends_with(strtolower($filename), '.pdf')) {
            throw $this->createNotFoundException('Invalid file type.');
        }

        // Construct file path using kernel.project_dir parameter
        $filePath = $this->getParameter('kernel.project_dir') . '/public/uploads/media/exams/files/' . $filename;

        if (!file_exists($filePath)) {
            throw $this->createNotFoundException('File not found.');
        }

        // Verify file is within allowed directory
        $realPath = realpath($filePath);
        $uploadsDir = realpath($this->getParameter('kernel.project_dir') . '/public/uploads/media/exams/files');
        if (!$realPath || !str_starts_with($realPath, $uploadsDir)) {
            throw $this->createNotFoundException('Invalid file path.');
        }

        $response = new Response(file_get_contents($filePath), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . basename($filename) . '"',
            'X-Content-Type-Options' => 'nosniff',
            'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
            'Pragma' => 'no-cache',
            'Content-Security-Policy' => "default-src 'self'; object-src 'none'",
        ]);

        return $response;
    }
}
