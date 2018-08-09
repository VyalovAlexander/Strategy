<?php

namespace VyalovAlexander\Strategy;

class Calculator
{

    /**
     * @var OperationInterface
     */
    private $strategy;

    /**
     * Calculator constructor.
     * @param string $operation
     */
    public function __construct(string $operation)
    {
        $this->strategy = $this->getStrategy($operation);
    }

    /**
     * @param $operation
     * @return OperationInterface
     * @throws \Exception
     */
    private function getStrategy($operation): OperationInterface
    {
        switch ($operation) {
            case '+':
                return new PlusOperation();
                break;
            case '-':
                return new SubsOperation();
                break;
            case '*':
                return new MultiOperation();
                break;
            case  '/':
                return new DivsOperation();
                break;
            default :
                throw new \Exception("unsupported operand");

        }
    }

    public function calc(int $a, int $b)
    {
        return $this->strategy->calc($a, $b);
    }

}