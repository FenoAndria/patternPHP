<?php

namespace App\DecoratorPattern;

class Initial implements InitialInterface
{
    public function price(): int
    {
        return 2000;
    }
}
