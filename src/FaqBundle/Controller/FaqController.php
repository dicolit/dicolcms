<?php

namespace FaqBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FaqController extends Controller
{
    /**
     * @Route("/faq", name="faq_page")
     */
    public function faqAction(Request $request)
    {
        $faq_list = array();
        for ($i = 1; $i < 11; $i++) {
            $faq_list[] = (object) array(
                'id' => $i,
                'title' => 'Title '.$i,
                'summary'=>'Summary .... '.$i,
                'href' => '/faq/'.$i,
            );
        }
        return $this->render(
            '@front/faq/faq_page.html.twig',
            array(
                'page_title' => 'FAQs',
                'faq_list' => $faq_list,
            )
        );
    }
    /**
     * @Route("/faq/{id}", name="faq_detail_page", requirements={
     *     "id": "\d+"
     * })
     */
    public function faqDetailAction(Request $request)
    {
        return $this->render(
            '@front/faq/faq_detail_page.html.twig',
            array(
                'page_title'=>'FAQ Detail'
            )
        );
    }

    /**
     * @Route("/faq/submit", name="faq_submit_page")
     */
    public function faqSubmitAction(Request $request)
    {
        return $this->render(
            '@front/faq/faq_submit_page.html.twig',
            array(
                'page_title'=>'FAQ Submit'
            )
        );
    }


}
