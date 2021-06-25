<?php

namespace App\Entity;

use App\Repository\CalculatorRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CalculatorRepository::class)
 */
class Calculator
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotEqualTo("0")
     */
    private $firstNumber;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Assert\NotEqualTo("0")
     */
    private $secondNumber;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Choice({"add", "subtract", "multiply", "divide", "squareRoot", "exponent"})
     */
    private $operand;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $output;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $created;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstNumber(): float
    {
        return $this->firstNumber;
    }

    public function setFirstNumber(float $firstNumber): float
    {
        $this->firstNumber = $firstNumber;

        return $this->firstNumber;
    }

    public function getSecondNumber(): ?float
    {
        return $this->secondNumber;
    }

    public function setSecondNumber(?float $secondNumber): ?float
    {
        $this->secondNumber = $secondNumber;

        return $this->secondNumber;
    }

    public function getOperand(): ?string
    {
        return $this->operand;
    }

    public function setOperand(string $operand): self
    {
        $this->operand = $operand;

        return $this;
    }

    public function getOutput(): ?string
    {
        return $this->output;
    }

    public function setOutput(string $output): self
    {
        $this->output = $output;

        return $this;
    }

    public function getCreated(): ?string
    {
        return $this->created;
    }

    public function setCreated(string $created): self
    {
        $this->created = $created;

        return $this;
    }
}
