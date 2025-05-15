<?php

namespace App\Controller;

use App\Entity\Etapes;
use App\Form\EtapesType;
use App\Repository\EtapesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/etapes')]
final class EtapesController extends AbstractController{
    #[Route(name: 'app_etapes_index', methods: ['GET'])]
    public function index(EtapesRepository $etapesRepository): Response
    {
        return $this->render('etapes/index.html.twig', [
            'etapes' => $etapesRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_etapes_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $etape = new Etapes();
        $form = $this->createForm(EtapesType::class, $etape);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($etape);
            $entityManager->flush();

            return $this->redirectToRoute('app_etapes_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('etapes/new.html.twig', [
            'etape' => $etape,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_etapes_show', methods: ['GET'])]
    public function show(Etapes $etape): Response
    {
        return $this->render('etapes/show.html.twig', [
            'etape' => $etape,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_etapes_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Etapes $etape, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EtapesType::class, $etape);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_etapes_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('etapes/edit.html.twig', [
            'etape' => $etape,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_etapes_delete', methods: ['POST'])]
    public function delete(Request $request, Etapes $etape, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$etape->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($etape);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_etapes_index', [], Response::HTTP_SEE_OTHER);
    }
}
