<?php

//src/Controller/HomeController.php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {
    
   /**
    * @Route("/home/welcome")
    * @return Response
    */ 
   public function welcome(){
       return $this->render('home/welcome.twig.html');
   }
}
