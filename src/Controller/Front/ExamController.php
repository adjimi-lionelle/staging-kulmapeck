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
    
    #[Route('/exam/{reference}/view', name: 'app_front_exam_view')]
    public function viewExam(Request $request, Exam $exam, PersonneRepository $personneRepository): Response
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

        $display = $request->query->get('display', 'subject');
        $file = $display === 'correction' ? $exam->getCorrection() : $exam->getSujet();
        $filePath = $this->getParameter('kernel.project_dir') . '/public/uploads/media/exams/files/' . $file;

        if (!file_exists($filePath)) {
            throw $this->createNotFoundException("Fichier introuvable.");
        }

        // Check if it's a mobile device
        $userAgent = $request->headers->get('User-Agent');
        $isMobile = preg_match('/(android|iphone|ipad|mobile)/i', $userAgent);

        // For mobile devices, we'll render a special template that embeds the PDF content
        if ($isMobile) {
            return $this->render('front/exam/mobile_view.html.twig', [
                'exam' => $exam,
                'file' => $file,
                'isExamPage' => true,
                'display' => $display
            ]);
        }

        // For desktop browsers, serve the PDF with security headers
        $response = new Response();
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'inline; filename="' . $file . '"');
        $response->headers->set('Content-Security-Policy', "default-src 'self'; object-src 'none'");
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('Cache-Control', 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $response->headers->set('Pragma', 'no-cache');
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
        
        $response->setContent(file_get_contents($filePath));
        
        return $response;
    }

    #[Route('/exam/file/{filename}', name: 'app_exam_file')]
    public function servePdfFile(string $filename): Response
    {
        $filePath = $this->getParameter('kernel.project_dir') . '/uploads/media/exams/files/' . $filename;

        if (!file_exists($filePath)) {
            throw $this->createNotFoundException("Fichier introuvable.");
        }

        return new Response(file_get_contents($filePath), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline', // Empêche le téléchargement en forçant l'affichage
            'X-Content-Type-Options' => 'nosniff',
            'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
            'Pragma' => 'no-cache',
        ]);
    }
}
