<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class QuestionController extends AbstractController

{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(Environment $twigEnvironment){
        $html = $twigEnvironment->render('question/homepage.html.twig');
        return new Response($html);


        return $this->render('question/homepage.html.twig');

    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        $answers = [
            'answer 1',
            'answer 2',
            'answer 3',
            ];

        dump($slug, $this);
        return $this->render('question/show.html.twig',[

            'question' =>ucwords(str_replace('-', ' ', $slug)),
            'answers' =>$answers,
            ]);
    }
}