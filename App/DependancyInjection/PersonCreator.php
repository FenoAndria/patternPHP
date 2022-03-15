<?php

namespace App\DependancyInjection;

abstract class PersonCreator
{
    abstract public function presentation(): string;
}
