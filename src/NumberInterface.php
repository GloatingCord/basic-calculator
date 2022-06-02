<?php

namespace GloatingCord26\BasicCalculator;

interface NumberInterface
{
    public function add(int $num1, int $num2);

    public function sub(int $num1, int $num2);

    public function mul(int $num1, int $num2);

    public function dev(int $num1, int $num2);
}
