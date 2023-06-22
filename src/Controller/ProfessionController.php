<?php

namespace App\Controller;

use App\Entity\Profession;
use App\Form\ProfessionType;
use App\Form\ProfessionSearchType;
use App\Repository\ProfessionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/profession')]
class ProfessionController extends AbstractController
{
    #[Route('/', name: 'app_profession_index', methods: ['GET', 'POST'])]
    public function index(Request $request, ProfessionRepository $professionRepository): Response
    {
        $professions = $professionRepository->findAll();

        return $this->render('profession/index.html.twig', [
            'professions' => $professions,
        ]);
    }

    #[Route('/new', name: 'app_profession_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ProfessionRepository $professionRepository): Response
    {
        $profession = new Profession();
        $form = $this->createForm(ProfessionType::class, $profession);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $professionRepository->save($profession, true);

            return $this->redirectToRoute('app_profession_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('profession/new.html.twig', [
            'profession' => $profession,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_profession_show', methods: ['GET'])]
    public function show(Profession $profession): Response
    {
        return $this->render('profession/show.html.twig', [
            'profession' => $profession,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_profession_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Profession $profession, ProfessionRepository $professionRepository): Response
    {
        $form = $this->createForm(ProfessionType::class, $profession);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $professionRepository->save($profession, true);

            return $this->redirectToRoute('app_profession_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('profession/edit.html.twig', [
            'profession' => $profession,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_profession_delete', methods: ['POST'])]
    public function delete(Request $request, Profession $profession, ProfessionRepository $professionRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $profession->getId(), $request->request->get('_token'))) {
            $professionRepository->remove($profession, true);
        }

        return $this->redirectToRoute('app_profession_index', [], Response::HTTP_SEE_OTHER);
    }
}
