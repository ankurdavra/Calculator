<?php

namespace App\Controller;

use App\Model\CalculatorOperation;
use App\Entity\Calculator;
use App\Form\CalculatorType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class CalculatorController extends AbstractController
{
    /**
     * @Route("/calculator", name="calculator")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function calculateAction(Request $request)
    {
        $calculatorEntity = new Calculator();

        $calculator = new CalculatorOperation($calculatorEntity);

        $form = $this->createForm(CalculatorType::class, $calculatorEntity);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $result = $calculator->performCalculation();

            $entityManager = $this->getDoctrine()->getManager();

            $calculatorEntity->setFirstNumber($calculatorEntity->getFirstNumber());
            $calculatorEntity->setSecondNumber($calculatorEntity->getSecondNumber());
            $calculatorEntity->setOperand($calculatorEntity->getOperand());
            $calculatorEntity->setOutput($result);
            $now = date('Y-m-d H:i:s');
            $calculatorEntity->setCreated($now);

            $entityManager->persist($calculatorEntity);

            $entityManager->flush();

            return $this->render('calculator/calculator.html.twig', array(
                    'form' => $form->createView(),
                    'result' => $result
                )
            );
        }

        return $this->render('calculator/calculator.html.twig', array('form' => $form->createView()));
    }
}
