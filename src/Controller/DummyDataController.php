<?php

namespace App\Controller;

use App\Entity\DummyData;
use App\Form\DummyDataFormType;
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
     * @return Response
     */
     public function getMovieAction(){
         $repository=$this->getDoctrine()->getRepository(DummyData::class);
         $movies=$repository->findall();
         return $this->handleView($this->view($movies));
     }

    /**
     * @Rest\Post("/dummypost")
     * @param Request $request
     *
     * @return Response
     */
     public function postDummyAction(Request $request){
         $dummy  = new DummyData();
         $form = $this->createForm(DummyDataFormType::class,$dummy);
         $data=json_decode($request->getContent(),true);
         $form->submit($data);
         if($form->isValid()){
             $em=$this->getDoctrine()->getManager();
             $em->persist($dummy);
             $em->flush();
             return $this->handleView($this->view(['status'=>'ok'],Response::HTTP_CREATED));
         }
         return $this->handleView($this->view($form->getErrors()));

     }
}
