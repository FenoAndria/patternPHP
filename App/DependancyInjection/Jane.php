<?php

namespace App\DependancyInjection;

class Jane extends PersonCreator
{
   public function presentation(): string
   {
       return "I'm Jane Doe";
   }
}
