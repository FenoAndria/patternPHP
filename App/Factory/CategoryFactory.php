<?php

namespace App\Factory;

class CategoryFactory
{
    public function createCategory(string $category): Category
    {
        $className = 'App\\Factory\\' . ucfirst($category) . '\\' . ucfirst($category) . 'Category';
        if (!class_exists($className)) throw new \Exception("Classe $className indéfinie");
        return new $className();
    }
}
