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
    return $this->render('@front/user/sign_in_page.html.twig', array(
      'page_title'=>'Sign In'
    ));
  }

  /**
   * @Route("/sign-up", name="sign_up_page")
   */
  public function signUpAction(Request $request)
  {
    return $this->render('@front/user/sign_up_page.html.twig', array(
      'page_title'=>'Sign Up'
    ));
  }

  /**
   * @Route("/forgot-password", name="forgot_password_page")
   */
  public function forgotPasswordAction(Request $request)
  {
    return $this->render('@front/user/forgot_password_page.html.twig', array(
      'page_title'=>'Forgot Password'
    ));
  }
}
