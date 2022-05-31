<?php

namespace GloatingCord26\BasicCalculator;

class NumberFuncs implements NumberInterface
{
    public function __construct(private float|int $num1, private float|int $num2)
    {
    }

    public function add(int|float $num1, int|float $num2): int|float
    {
        return $this->{$num1} + $this->{$num2};
    }

    public function sub(int|float $num1, int|float $num2): int|float
    {
        return $this->{$num1} - $this->{$num2};
    }

    public function mul(int|float $num1, int|float $num2): int|float
    {
        return $this->{$num1} * $this->{$num2};
    }

    public function dev(int|float $num1, int|float $num2): int|float
    {
        return $this->{$num1} / $this->{$num2};
    }
}
