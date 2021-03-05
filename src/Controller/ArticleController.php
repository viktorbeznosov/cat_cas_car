<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 04.03.21
 * Time: 22:23
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response('Это наша первая страница на Symfony+++');
    }

    /**
     * @Route("/articles/{slug}")
     */
    public function show($slug){
        $comments = array(
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        );

        return $this->render('articles/show.html.twig', array(
            'article' => sprintf('Будущая статья: %s',
                $slug
            ),
            'comments' => $comments
        ));


    }
}