<?php

namespace App\Polymorphisme;

class DevelopperCreator
{
    public function create(DevelopperInterface $developper)
    {
        return $developper->getTitle();
    }
}
