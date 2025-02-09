<?php

namespace App\Controller\Instructor;

use App\Entity\Cours;
use App\Form\CoursType;
use App\Repository\EnseignantRepository;
use App\Service\FileUploader;
use App\Utils\CoursUtils;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[ Route( '/instructor/cours' ) ]

class CoursController extends AbstractController
 {
    // #[ Route( '/', name: 'app_instructor_cours_index', methods: [ 'GET' ] ) ]
    // public function index( CoursRepository $coursRepository ): Response
    // {
    //     return $this->render( 'instructor/cours/index.html.twig', [
    //         'cours' => $coursRepository->findAll(),
    // ] );
    // }

    #[ Route( '/new', name: 'app_instructor_cours_new', methods: [ 'GET', 'POST' ] ) ]

    public function new( Request $request, SluggerInterface $slugger, EntityManagerInterface $entityManager, EnseignantRepository $enseignantRepository, FileUploader $fileUploader ): Response
 {
        $enseignant = $enseignantRepository->findOneBy( [ 'utilisateur' => $this->getUser() ] );
        if ( $enseignant === null || !$enseignant->isIsCertified() ) {
            throw $this->createAccessDeniedException();
        }

        $cours = new Cours();
        $form = $this->createForm( CoursType::class, $cours );
        $form->handleRequest( $request );

        if ( $form->isSubmitted() && $form->isValid() ) {
            $cours->setEnseignant( $enseignant );
            $cours->setSlug( $slugger->slug( $cours->getIntitule().'-'.time().'-'.$cours->getId() ) );
            CoursUtils::uploadCourseMedia( $cours, $fileUploader );

            $entityManager->persist( $cours );
            $entityManager->flush();

            return $this->redirectToRoute( 'app_instructor_courses', [], Response::HTTP_SEE_OTHER );
        }

        return $this->render( 'instructor/cours/new.html.twig', [
            'cours' => $cours,
            'form' => $form,
        ] );
    }

    // #[ Route( '/{id}', name: 'app_instructor_cours_show', methods: [ 'GET' ] ) ]
    // public function show( Cours $cour ): Response
    // {
    //     return $this->render( 'instructor/cours/show.html.twig', [
    //         'cour' => $cour,
    // ] );
    // }

    #[ Route( '/{slug}/edit', name: 'app_instructor_cours_edit', methods: [ 'GET', 'POST' ] ) ]

    public function edit( Request $request, Cours $cours, EntityManagerInterface $entityManager, EnseignantRepository $enseignantRepository, FileUploader $fileUploader ): Response
 {
        $enseignant = $enseignantRepository->findOneBy( [ 'utilisateur' => $this->getUser() ] );
        if ( $enseignant === null || !$enseignant->isIsCertified() || ( $cours !== null && $enseignant->getId() !== $cours->getEnseignant()->getId() ) ) {
            throw $this->createAccessDeniedException();
        }

        $form = $this->createForm( CoursType::class, $cours );
        $form->handleRequest( $request );

        if ( $form->isSubmitted() && $form->isValid() ) {
            try {
                CoursUtils::uploadCourseMedia( $cours, $fileUploader );
                $cours->setUpdatedAt( new \DateTimeImmutable() );
                $entityManager->flush();
                
                if ($request->isXmlHttpRequest()) {
                    return $this->json([
                        'success' => true,
                        'message' => 'Course updated successfully'
                    ]);
                }
                
                $this->addFlash('success', 'Course updated successfully');
                return $this->redirectToRoute( 'app_instructor_courses', [], Response::HTTP_SEE_OTHER );
            } catch (\Exception $e) {
                if ($request->isXmlHttpRequest()) {
                    return $this->json([
                        'success' => false,
                        'errors' => [$e->getMessage()]
                    ], Response::HTTP_BAD_REQUEST);
                }
                $this->addFlash('error', 'Error uploading file: ' . $e->getMessage());
            }
        } elseif ($form->isSubmitted()) {
            $errors = [];
            foreach ($form->getErrors(true) as $error) {
                $errors[] = $error->getMessage();
            }
            
            if ($request->isXmlHttpRequest()) {
                return $this->json([
                    'success' => false,
                    'errors' => $errors
                ], Response::HTTP_BAD_REQUEST);
            }
            
            foreach ($errors as $error) {
                $this->addFlash('error', $error);
            }
        }

        return $this->render( 'instructor/cours/edit.html.twig', [
            'cours' => $cours,
            'form' => $form,
            'isEditionMode' => true
        ] );
    }

    // #[ Route( '/{id}', name: 'app_instructor_cours_delete', methods: [ 'POST' ] ) ]
    // public function delete( Request $request, Cours $cour, EntityManagerInterface $entityManager ): Response
    // {
    //     if ( $this->isCsrfTokenValid( 'delete'.$cour->getId(), $request->request->get( '_token' ) ) ) {
    //         $entityManager->remove( $cour );
    //         $entityManager->flush();
    //     }

    //     return $this->redirectToRoute( 'app_instructor_courses', [], Response::HTTP_SEE_OTHER );
    // }
}
