<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 11.02.2018
 * Time: 10:25
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     * @return Response
     */
    public function homepage()
    {
        return $this->render('article/homepage.html.twig');
    }

    /**
     * @param $slug
     * @Route("/news/{slug}", name="article_show")
     *
     * @return Response
     */
    public function show($slug)
    {

        $comments = [
            'hut vyt cytc ygh',
            '2jvu76fuyv',
            '3sdhgv76g87gdsiybsdjhb'
        ];

        return $this->render("article/show.html.twig", [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments
        ]);
    }
}