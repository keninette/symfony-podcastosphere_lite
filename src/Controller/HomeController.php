<?php

//src/Controller/HomeController.php

namespace App\Controller;
use App\Entity\Podcast;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {
    
   /**
    * @Route("/")
    * @return Response
    */ 
   public function indexAction(){
       
        $podcastRepository   = $this->getDoctrine()->getRepository(Podcast::class);
        $latestPodcasts      = $podcastRepository->findLatest(4);
        
        return $this->render('home/index.twig.html', ['podcasts' => $latestPodcasts]);
   }
}
