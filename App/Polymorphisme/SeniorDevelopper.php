<?php

namespace App\Polymorphisme;

class SeniorDevelopper implements DevelopperInterface
{
    public function getTitle(): string
    {
        return 'Senior';
    }
}
