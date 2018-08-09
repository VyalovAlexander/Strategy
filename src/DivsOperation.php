<?php

namespace VyalovAlexander\Strategy;

class DivsOperation implements OperationInterface
{
    /**
     * @param int $a
     * @param int $b
     * @return int
     * @throws \Exception
     */
    public function calc(int $a, int $b): int
    {
        if (!$b)
        {
            throw new \Exception('division by zero');
        }
        return floor($a / $b);
    }

}