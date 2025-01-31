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

        $response = $this->render('front/exam/show.html.twig', [
            'exam' => $exam,
            'isExamPage' => true,
            'display' => $request->query->get('display', 'subject'),
            'data' => $request->query->get('display', 'subject') === 'correction' ? $exam->getCorrection() : $exam->getSujet(),
        ]);

        // Add security headers to prevent downloads but allow PDF.js
        $response->headers->set('Content-Security-Policy', "default-src 'self' 'unsafe-inline' https://cdnjs.cloudflare.com; object-src 'none'; script-src 'self' 'unsafe-inline' https://cdnjs.cloudflare.com; frame-ancestors 'self'; worker-src blob:;");
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
        
        return $response;
    }
    
    #[Route('/exam/file/{filename}', name: 'app_exam_file')]
    public function servePdfFile(string $filename, Request $request): Response
    {
        // Construct the file path - check both possible locations
        $filePath = $this->getParameter('kernel.project_dir') . '/uploads/media/exams/files/' . $filename;
        $alternativePath = $this->getParameter('kernel.project_dir') . '/public/uploads/media/exams/files/' . $filename;
        
        // Debug logging
        error_log("Attempting to serve PDF file");
        error_log("Checking primary path: " . $filePath);
        error_log("File exists in primary path: " . (file_exists($filePath) ? 'yes' : 'no'));
        error_log("Checking alternative path: " . $alternativePath);
        error_log("File exists in alternative path: " . (file_exists($alternativePath) ? 'yes' : 'no'));
        
        // Try both paths
        if (file_exists($filePath)) {
            $finalPath = $filePath;
        } elseif (file_exists($alternativePath)) {
            $finalPath = $alternativePath;
        } else {
            error_log("File not found in either location: " . $filename);
            throw $this->createNotFoundException("Fichier introuvable: " . $filename);
        }

        // Verify file is actually a PDF
        $mimeType = mime_content_type($finalPath);
        error_log("File mime type: " . $mimeType);
        if ($mimeType !== 'application/pdf') {
            error_log("Invalid mime type: " . $mimeType);
            throw $this->createAccessDeniedException("Invalid file type: " . $mimeType);
        }

        $fileSize = filesize($finalPath);
        $response = new Response();
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Accept-Ranges', 'bytes');

        // Handle range requests
        if ($request->headers->has('Range')) {
            $range = $request->headers->get('Range');
            if (preg_match('/bytes=(\d+)-(\d+)?/', $range, $matches)) {
                $start = intval($matches[1]);
                $end = isset($matches[2]) ? intval($matches[2]) : $fileSize - 1;
                
                error_log("Range request: $start-$end");
                
                $length = $end - $start + 1;
                $response->headers->set('Content-Length', $length);
                $response->headers->set('Content-Range', sprintf('bytes %d-%d/%d', $start, $end, $fileSize));
                $response->setStatusCode(206);
                
                $handle = fopen($finalPath, 'rb');
                fseek($handle, $start);
                $content = fread($handle, $length);
                fclose($handle);
            }
        } else {
            // Full file request
            $response->headers->set('Content-Length', $fileSize);
            $content = file_get_contents($finalPath);
        }

        if ($content === false) {
            error_log("Failed to read file contents: " . $finalPath);
            throw new \RuntimeException("Failed to read file contents");
        }

        $response->setContent($content);
        
        // Security headers
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('Content-Security-Policy', "default-src 'self' 'unsafe-inline' https://cdnjs.cloudflare.com; object-src 'none'; script-src 'self' 'unsafe-inline' https://cdnjs.cloudflare.com; frame-ancestors 'self'; worker-src blob:;");
        
        // CORS headers
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'GET, OPTIONS');
        $response->headers->set('Access-Control-Allow-Headers', 'Range, Content-Type, Accept');
        $response->headers->set('Access-Control-Expose-Headers', 'Accept-Ranges, Content-Length, Content-Range');
        
        // Cache control
        $response->headers->set('Cache-Control', 'private, must-revalidate');

        return $response;
    }
}
