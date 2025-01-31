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
    
    #[Route('/exam/file/{filename}', name: 'app_exam_file', methods: ['GET', 'OPTIONS'])]
    public function servePdfFile(string $filename, Request $request): Response
    {
        if ($request->getMethod() === 'OPTIONS') {
            $response = new Response();
            $response->headers->set('Access-Control-Allow-Origin', '*');
            $response->headers->set('Access-Control-Allow-Methods', 'GET, OPTIONS');
            $response->headers->set('Access-Control-Allow-Headers', 'Range, Content-Type, Accept, Origin');
            $response->headers->set('Access-Control-Max-Age', '3600');
            return $response;
        }

        try {
            $filePath = $this->getParameter('kernel.project_dir') . '/uploads/media/exams/files/' . $filename;
            $alternativePath = $this->getParameter('kernel.project_dir') . '/public/uploads/media/exams/files/' . $filename;
            
            if (file_exists($filePath) && is_readable($filePath)) {
                $finalPath = $filePath;
            } elseif (file_exists($alternativePath) && is_readable($alternativePath)) {
                $finalPath = $alternativePath;
            } else {
                throw new \Exception('PDF file not found or not readable');
            }

            $size = filesize($finalPath);
            $response = new Response();
            
            // Handle range requests
            $start = 0;
            $end = $size - 1;
            
            if ($request->headers->has('Range')) {
                $range = $request->headers->get('Range');
                list(, $range) = explode('=', $range);
                
                if (strpos($range, ',') !== false) {
                    $response->setStatusCode(416); // Requested range not satisfiable
                    return $response;
                }
                
                if ($range == '-') {
                    $start = $size - substr($range, 1);
                } else {
                    $range = explode('-', $range);
                    $start = $range[0];
                    $end = (isset($range[1]) && is_numeric($range[1])) ? $range[1] : $size - 1;
                }
                
                if ($start > $end || $start > $size - 1 || $end >= $size) {
                    $response->setStatusCode(416); // Requested range not satisfiable
                    return $response;
                }
                
                $response->setStatusCode(206); // Partial content
                $response->headers->set('Content-Range', sprintf('bytes %d-%d/%d', $start, $end, $size));
            }

            $response->headers->set('Content-Length', $end - $start + 1);
            $response->headers->set('Accept-Ranges', 'bytes');
            $response->headers->set('Content-Type', 'application/pdf');
            $response->headers->set('Content-Disposition', 'inline; filename="' . basename($filename) . '"');
            
            // CORS headers
            $response->headers->set('Access-Control-Allow-Origin', '*');
            $response->headers->set('Access-Control-Allow-Methods', 'GET, OPTIONS');
            $response->headers->set('Access-Control-Allow-Headers', 'Range, Content-Type, Accept, Origin');
            $response->headers->set('Access-Control-Expose-Headers', 'Accept-Ranges, Content-Length, Content-Range');
            
            // Security headers
            $response->headers->set('X-Content-Type-Options', 'nosniff');
            
            // Stream the file in chunks
            $response->setCallback(function () use ($finalPath, $start, $end) {
                $handle = fopen($finalPath, 'rb');
                fseek($handle, $start);
                $remaining = $end - $start + 1;
                $chunkSize = 8192;
                
                while (!feof($handle) && $remaining > 0) {
                    $readSize = min($chunkSize, $remaining);
                    $data = fread($handle, $readSize);
                    $remaining -= strlen($data);
                    echo $data;
                    flush();
                }
                
                fclose($handle);
            });

            return $response;

        } catch (\Exception $e) {
            throw $this->createNotFoundException($e->getMessage());
        }
    }
}
