<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response('asd');
    }

    /**
     * @Route("/questions/{mizus}")
     */
    public function show($mizus): Response
    {
        return new Response(sprintf(
            'smth smth"%s"',
            ucwords(str_replace('-', ' ', $mizus))
        ));
    }
}