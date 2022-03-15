<?php

namespace App\Polymorphisme;

class JuniorDevelopper implements DevelopperInterface
{
    public function getTitle(): string
    {
        return 'Junior';
    }
    # code...
}
