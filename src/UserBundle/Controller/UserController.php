<?php

namespace UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
  /**
   * @Route("/sign-in", name="sign_in_page")
   */
  public function signInAction(Request $request)
  {
    // replace this example code with whatever you need
    return $this->render('@front/user/sign_in_page.html.twig', array(
      'page_title'=>'Sign In'
    ));
  }
}
