<?php

namespace App\Controller;

use App\Form\Type\TestType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/")
     * @Template
     */
    public function test() {
        return [
            'form' => $this->createForm(TestType::class)->createView(),
            'silly' => 'base.html.twig'
        ];
    }
}