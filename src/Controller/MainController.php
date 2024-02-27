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

    /**
     * @Route("/update/{id}", name="update")
     */
    public function update(Request $request, $id){
        $crud = $this->getDoctrine()->getRepository(Crud::class)->find($id);
        $form = $this->createForm(CrudType::class, $crud);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($crud);
            $em->flush();

            $this->addFlash('notice', 'Update Successfully');

            return $this->redirectToRoute('main'); // Corrected redirect
        }

        return $this->render('main/update.html.twig', [
            'form' => $form->createView()
        ]);
    }

//    /**
//     * @Route("/delete/{id}", name="delete")
//     */
//    public function delete(Request $request, $id){
//        $crud = $this->getDoctrine()->getRepository(Crud::class)->find($id);
//        $form = $this->createForm(CrudType::class, $crud);
//        $form->handleRequest($request);
//        if ($form->isSubmitted() && $form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($crud);
//            $em->flush();
//
//            $this->addFlash('notice', 'Deleted Successfully');
//
//            return $this->redirectToRoute('main'); // Corrected redirect
//        }
//
//        return $this->render('main/delete.html.twig', [
//            'form' => $form->createView()
//        ]);
//    }

    /**
     * @Route("/list", name="list")
     */
    public function list(): Response
    {
        // Fetch data from the database
        $data = $this->getDoctrine()->getRepository(Crud::class)->findAll();

// Pass the data to the template
        return $this->render('main/list.html.twig', [
            'list' => $data,
        ]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request) {
        $crud = new Crud();
        $form = $this->createForm(CrudType::class, $crud);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($crud);
            $em->flush();

            $this->addFlash('notice', 'Submitted Successfully');

            return $this->redirectToRoute('list'); // Corrected redirect
        }

        return $this->render('main/login.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/welcome", name="welcome")
     */
    public function welcome(): Response
    {

// Pass the data to the template
        return $this->render('main/welcome.html.twig');
    }

    /**
     * @Route("/account", name="account")
     */
    public function account(Request $request): Response
    {
        $crud = new Crud();
        $form = $this->createForm(CrudType::class, $crud);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($crud);
            $em->flush();

            $this->addFlash('notice', 'Submitted Successfully');

            return $this->redirectToRoute('welcome'); // Corrected redirect
        }

        return $this->render('main/account.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
