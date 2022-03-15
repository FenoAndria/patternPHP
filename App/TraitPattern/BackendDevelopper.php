<?php

namespace App\TraitPattern;

use App\TraitPattern\Traits\BackendTrait;
use App\TraitPattern\Traits\JuniorTrait;

class BackendDevelopper extends Developper
{
    use BackendTrait;
}
