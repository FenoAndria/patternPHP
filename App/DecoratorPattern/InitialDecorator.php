<?php

namespace App\DecoratorPattern;

abstract class InitialDecorator implements InitialInterface
{

    protected InitialInterface $initial;
    
    public function __construct(InitialInterface $initial)
    {
        $this->initial = $initial;
    }
}
