<?php

namespace CategoryBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CategoryController extends Controller
{
    /**
     * @Route("/category", name="category_page")
     */
    public function categoryAction(Request $request)
    {
        $category_list = array();
        for ($i = 1; $i < 11; $i++) {
            $category_list[] = (object) array(
                'id' => $i,
                'title' => 'Category '.$i,
                'href' => '/category/'.$i,
            );
        }

        return $this->render(
            '@front/item/category_page.html.twig',
            array(
                'page_title' => 'Category List',
                'item_list' => $category_list,
            )
        );
    }

    /**
     * @Route("/category/{id}", name="category_detail_page", requirements={
     *     "id": "\d+"
     * })
     */
    public function categoryDetailAction(Request $request)
    {
        return $this->render(
            '@front/item/category_detail_page.html.twig',
            array(
                'page_title' => 'Category Detail',
            )
        );
    }


}
