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
        return $this->render(
            '@front/default/home_page.html.twig',
            array(
                'page_title' => 'Home',
            )
        );
    }

    /**
     * @Route("/{friendly_url}.html", name="custom_page")
     */
    public function customAction(Request $request)
    {
        $response = $this->forward(
            'AppBundle:Default:home',
            array(
                'page_title' => 'Home',
            )
        );

        return $response;
    }

    /**
     * @Route("/404", name="_404_page")
     */
    public function _404Action(Request $request)
    {
        return $this->render(
            '@front/default/404_page.html.twig',
            array(
                'page_title' => '404 page',
            )
        );
    }

    /**
     * @Route("/403", name="_403_page")
     */
    public function _403Action(Request $request)
    {
        return $this->render(
            '@front/default/403_page.html.twig',
            array(
                'page_title' => 'Access Denied',
            )
        );
    }
}
