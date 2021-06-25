<?php

namespace App\Controller;

use App\Entity\Calculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class GetCalculatorDataController extends AbstractController
{
    /**
     * @Route("/get-results", name="calculatorOperations")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $results = $entityManager->getRepository(Calculator::class)->findAll();

        return $this->json($results);

    }
}
