<?php

namespace App\DecoratorPattern;

class Quadruple extends InitialDecorator
{
    public function price(): int
    {
        return $this->initial->price() * 4;
    }
}
