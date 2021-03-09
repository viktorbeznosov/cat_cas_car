<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 04.03.21
 * Time: 22:23
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(){
        return $this->render('articles/homepage.html.twig');
    }

    /**
     * @Route("/articles/{slug}", name="app_article_show")
     */
    public function show($slug){
        $comments = array(
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        );

        dump($comments);

        return $this->render('articles/show.html.twig', array(
            'article' => sprintf('Будущая статья: %s',
                $slug
            ),
            'comments' => $comments
        ));


    }
}