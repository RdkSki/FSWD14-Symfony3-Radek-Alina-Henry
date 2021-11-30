<?php

namespace App\Controller;

use Symfony\Component\Form\Extension\Core\Type\TextType;//string
use Symfony\Component\Form\Extension\Core\Type\DateType;//year
use Symfony\Component\Form\Extension\Core\Type\IntegerType;//price
use Symfony\Component\Form\Extension\Core\Type\SubmitType; //button

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Autos;

class CarsController extends AbstractController
{

    #[Route('/', name: 'cars')]
    public function index(): Response
    {
        $autos = $this->getDoctrine()->getRepository('App:Autos')->findAll();
        return $this->render('cars/index.html.twig', array("autos" => $autos));
    }

    // ---->>>> Initial index display <<<----
    // #[Route('/', name: 'cars_index')]
    // public function index(): Response
    // {
    //     return $this->render('cars/index.html.twig');
    // }



    #[Route('/create', name: 'cars_create')]
    public function create(): Response
    {
        return $this->render('cars/create.html.twig');
    }
    
    #[Route('/edit/{id}', name: 'cars_edit')]
    public function edit(): Response
    {
        return $this->render('cars/edit.html.twig');
    }

    #[Route('/details/{id}', name: 'cars_details')]
    public function details($id): Response
    {
        return $this->render('cars/details.html.twig');
    }













}
