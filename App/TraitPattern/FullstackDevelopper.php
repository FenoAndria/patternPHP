<?php

namespace App\TraitPattern;

use App\TraitPattern\Traits\BackendTrait;
use App\TraitPattern\Traits\FrontendTrait;

class FullstackDevelopper extends Developper
{
   use BackendTrait, FrontendTrait;
}
