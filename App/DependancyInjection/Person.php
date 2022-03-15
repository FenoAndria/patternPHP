<?php

namespace App\DependancyInjection;

class Person
{
    private $person;

    public function __construct(PersonCreator $person)
    {
        $this->person = $person;
    }

    public function presentation(): string
    {
        return $this->getName()->presentation();
    }

    public function getName(): PersonCreator
    {
        return $this->person;
    }
}
