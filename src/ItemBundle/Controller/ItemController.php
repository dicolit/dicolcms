<?php

namespace ItemBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ItemController extends Controller
{
    /**
     * @Route("/item", name="item_page")
     */
    public function itemAction(Request $request)
    {
        $item_list = array();
        for ($i = 1; $i < 11; $i++) {
            $item_list[] = (object) array(
                'id' => $i,
                'title' => 'Title '.$i,
                'href' => '/item/'.$i,
            );
        }

        return $this->render(
            '@front/item/item_page.html.twig',
            array(
                'page_title' => 'Item List',
                'item_list' => $item_list,
            )
        );
    }

    /**
     * @Route("/item/{id}", name="item_detail_page", requirements={
     *     "id": "\d+"
     * })
     */
    public function itemDetailAction(Request $request)
    {
        return $this->render(
            '@front/item/item_detail_page.html.twig',
            array(
                'page_title' => 'Item Detail',
            )
        );
    }


}
