<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 04.03.21
 * Time: 22:23
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
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
        return new Response(
            sprintf('Будущая статья: %s',
            $slug
        ));
    }
}