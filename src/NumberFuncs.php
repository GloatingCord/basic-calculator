<?php

namespace GloatingCord26\BasicCalculator;

class NumberFuncs implements NumberInterface
{
    public function add(int $num1, int $num2): int
    {
        return $num1 + $num2;
    }

    public function sub(int $num1, int $num2): int
    {
        return $num1 - $num2;
    }

    public function mul(int $num1, int $num2): int
    {
        return $num1 * $num2;
    }

    public function dev(int $num1, int $num2): int
    {
        return $num1 / $num2;
    }
}
