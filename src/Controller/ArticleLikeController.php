<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleLikeController extends AbstractController
{
    /**
     * @param $id
     * @param $type
     * @Route("articles/{id<\d+>}/like/{type<like|dislike>}", methods={"POST"}, name="app_articles_like")
     */
    public function like($id, $type, LoggerInterface $logger){
        if ($type == 'like'){
            $likes = rand(121, 200);
            $logger->info('Somebody liked this Article');
        } else {
            $likes = rand(0, 119);
            $logger->warning('Somebody disliked this Article');
        }

        return $this->json(['likes' => $likes]);
    }
}
