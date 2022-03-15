<?php

namespace App\DependancyInjection;

class Jean extends PersonCreator
{
   public function presentation(): string
   {
       return "Je m'appelle Jean";
   }
}
