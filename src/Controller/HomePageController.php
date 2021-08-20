<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BlogMessageRepository;

class HomePageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(BlogMessageRepository $blogMessageRepository): Response
    {

        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomePageController',
            'blog_messages' => $blogMessageRepository->findAll()
        ]);
    }

}