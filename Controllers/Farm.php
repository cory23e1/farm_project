<?php

namespace FarmProject\Controllers;
class Farm
{
    //массивы хранения животных
    public $animals = [];
    public $animal_products = [];

    //описание метода учета животных на ферме
    public function uchetAnimals(array $data)
    {
        foreach ($data as $name=>$count) {
            $class = __NAMESPACE__ . '\\' . $name;
            for ($i = 1; $i <= $count; $i++) {
                $this->animals[$name][] = new $class();
            }
        }
        return $this->animals;
    }

    //описание метода cбора урожая на ферме в зависимости от количества дней
    public function collectAnimalProducts(int $day_count)
    {
        foreach ($this->animals as $key => $animals) {
            $product = 0;
            foreach ($animals as $animal) {
                $product += $animal->getProducts();
            }
            $this->animal_products[$key] = $product*$day_count;
        }
        return $this->animal_products;
    }
}