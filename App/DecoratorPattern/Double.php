<?php

namespace App\DecoratorPattern;

class Double extends InitialDecorator
{
    public function price(): int
    {
        return $this->initial->price() * 2;
    }
}
