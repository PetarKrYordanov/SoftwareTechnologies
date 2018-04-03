<?php
namespace CalculatorBundle\Entity;

class Calculator
{

    /**
     * @return float
     */
    private $leftOperand;

    /*
     * @return float
     */
    private $rightOperand;

    /*
     * @return string
     */
    private $operator;

    /**
     * @return mixed
     */
    public function getRightOperand()
    {
        return $this->rightOperand;
    }

    /**
     * @param mixed $rightOperand
     */
    public function setRightOperand($rightOperand)
    {
        $this->rightOperand = $rightOperand;
    }

    /**
     * @return mixed
     */
    public function getLeftOperand()
    {
        return $this->leftOperand;
    }

    /**
     * @param mixed $leftOperand
     */
    public function setLeftOperand($leftOperand)
    {
        $this->leftOperand = $leftOperand;
    }

    /**
     * @return mixed
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @param mixed $operator
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }
}

