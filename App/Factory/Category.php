<?php

namespace App\Factory;

abstract class Category
{

    public function getSkills(): array
    {
        return $this->skills;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }
    
    public function getExperiences(): int{
        return $this->experiences;
    }
}
