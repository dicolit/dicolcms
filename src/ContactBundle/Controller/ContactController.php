<?php

namespace ContactBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact_page")
     */
    public function contactAction(Request $request)
    {
        return $this->render(
            '@front/contact/contact_page.html.twig',
            array(
                'page_title' => 'Contact',
            )
        );
    }

}
