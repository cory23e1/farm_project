<?php

namespace FarmProject\Controllers;

abstract class Animal
{
    //уникальный идентификатор животного
    public $id;

    public function __construct()
    {
        //генерация уникального идентификатора животного
        $this->id = uniqid('',true);
    }

    //абстракный метод сбора урожая
    abstract public function getProducts();

}