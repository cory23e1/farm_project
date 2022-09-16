<?php

namespace FarmProject\Controllers;

class Chicken extends Animal
{
    //мин и макс количество даваемых курицей яиц
    private const min_egg = 0;
    private const max_egg = 1;

    //описание метода получения яиц
    public function getProducts()
    {
        return rand(self::min_egg, self::max_egg);
    }

}