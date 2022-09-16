<?php

namespace FarmProject\Controllers;

class Cow extends Animal
{
    //мин и макс количество даваемого коровой молока
    private const min_milk = 8;
    private const max_milk = 12;

    //описание метода получения молока
    public function getProducts()
    {
        return rand(self::min_milk, self::max_milk);
    }

}