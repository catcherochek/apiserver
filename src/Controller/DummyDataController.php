<?php

namespace App\Controller;

use App\Entity\DummyData;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * DummyDataController.
 * @Route("/api",name="api_")
 */
class DummyDataController extends FOSRestController
{
    /**
     * @Route("/dummydata", name="dummydata")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/DummyDataController.php',
        ]);
    }
    /**
     * @Rest\Get("/dummyget")
     *
     */
     public function getMovieAction(){
         $repository=$this->getDoctrine()->getRepository(DummyData::class);
         $movies=$repository->findall();
         return $this->handleView($this->view($movies));
     }
}
