<?php

//src/Controller/HomeController.php

namespace App\Controller;
use App\Entity\Podcast;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PodcastController extends Controller {
    
   /**
    * @Route("/podcast/{id}", name="star_podcast", requirements={"id" = "\d+"})
    * @return Response
    */ 
   public function indexAction($id){
       $podcastRepository   = $this->getDoctrine()->getRepository(Podcast::class);
       $podcast             = $podcastRepository->find($id);
       
       return $this->render('podcast/index.html.twig', ['podcast' => $podcast]);
   }
}
