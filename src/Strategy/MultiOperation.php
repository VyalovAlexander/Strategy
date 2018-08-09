<?php

namespace VyalovAlexander\Strategy;

class MultiOperation implements OperationInterface
{
    public function calc(int $a, int $b): int
    {
        return $a * $b;
    }

}