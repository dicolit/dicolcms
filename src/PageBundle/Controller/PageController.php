<?php

namespace PageBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller
{
  /**
   * @Route("/about", name="about_page")
   */
  public function aboutAction(Request $request)
  {
    return $this->render('@front/page/about_page.html.twig', array(
      'page_title'=>'About'
    ));
  }

  /**
   * @Route("/privacy", name="privacy_page")
   */
  public function privacyAction(Request $request)
  {
    return $this->render('@front/page/privacy_page.html.twig', array(
      'page_title'=>'Privacy'
    ));
  }

  /**
   * @Route("/terms", name="terms_page")
   */
  public function termsAction(Request $request)
  {
    return $this->render('@front/page/terms_page.html.twig', array(
      'page_title'=>'Terms'
    ));
  }

}
