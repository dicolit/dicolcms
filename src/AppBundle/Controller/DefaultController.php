<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home_page")
     */
    public function homeAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('@front/default/home_page.html.twig', array(
          'page_title'=>'Sign In'
        ));
    }
}
