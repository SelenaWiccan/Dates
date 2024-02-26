<?php

namespace App\Controller;

use App\Entity\Crud;
use App\Form\CrudType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/main", name="main")
     */
    public function index(): Response
    {
        // Fetch data from the database
        $data = $this->getDoctrine()->getRepository(Crud::class)->findAll();

// Pass the data to the template
        return $this->render('main/index.html.twig', [
            'list' => $data,
        ]);



    }
    /**
     * @Route("/create", name="create")
     */
    public function create(Request $request) {
        $crud = new Crud();
        $form = $this->createForm(CrudType::class, $crud);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($crud);
            $em->flush();

            $this->addFlash('notice', 'Submitted Successfully');

            return $this->redirectToRoute('main'); // Corrected redirect
        }

        return $this->render('main/create.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
