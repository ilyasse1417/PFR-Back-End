<?php

namespace App\Controller;

use App\Entity\Craftsman;
use App\Form\CraftsmanType;
use App\Repository\CraftsmanRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/craftsman')]
class CraftsmanController extends AbstractController
{
    #[Route('/', name: 'app_craftsman_index', methods: ['GET', 'POST'])]
    public function index(Request $request, CraftsmanRepository $craftsmanRepository): Response
    {
        $craftsmen = $craftsmanRepository->findAll();

        return $this->render('craftsman/index.html.twig', [
            'craftsmen' => $craftsmen,
        ]);
    }

    #[Route('/new', name: 'app_craftsman_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CraftsmanRepository $craftsmanRepository): Response
    {
        $craftsman = new Craftsman();
        $form = $this->createForm(CraftsmanType::class, $craftsman);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $craftsman->getUser()->setPassword('unPassWord');
            //TODO envoyer le pwd par email
            $craftsmanRepository->save($craftsman, true);

            return $this->redirectToRoute('app_craftsman_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('craftsman/new.html.twig', [
            'craftsman' => $craftsman,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_craftsman_show', methods: ['GET'])]
    public function show(Craftsman $craftsman): Response
    {
        return $this->render('craftsman/show.html.twig', [
            'craftsman' => $craftsman,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_craftsman_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Craftsman $craftsman, CraftsmanRepository $craftsmanRepository): Response
    {
        $form = $this->createForm(CraftsmanType::class, $craftsman);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $craftsmanRepository->save($craftsman, true);

            return $this->redirectToRoute('app_craftsman_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('craftsman/edit.html.twig', [
            'craftsman' => $craftsman,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_craftsman_delete', methods: ['POST'])]
    public function delete(Request $request, Craftsman $craftsman, CraftsmanRepository $craftsmanRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $craftsman->getId(), $request->request->get('_token'))) {
            $craftsmanRepository->remove($craftsman, true);
        }

        return $this->redirectToRoute('app_craftsman_index', [], Response::HTTP_SEE_OTHER);
    }
}
