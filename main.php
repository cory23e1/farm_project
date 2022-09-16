<?php

namespace FarmProject;

require_once __DIR__ . '/autoload.php';

use FarmProject\Controllers\Farm;

$farm = new Farm();

$days_for_collect = 7;

$animals = $farm->uchetAnimals(['Cow'=>10,'Chicken'=>20]);
echo 'Кол-во коров на ферме: '.count($animals['Cow']) .' Кол-во кур на ферме: '.count($animals['Chicken']).'<br/>';

$collected_products = $farm->collectAnimalProducts($days_for_collect);
echo 'Кол-во собраного молока: '.$collected_products['Cow'].' л. Кол-во собранных яиц: '.$collected_products['Chicken'].' за '.$days_for_collect.' дней <br/>';

echo 'Куплено еще 5 кур и 1 корова <br/>';

$animals_after_buy = $farm->uchetAnimals(['Cow'=>1,'Chicken'=>5]);
echo 'Кол-во коров на ферме: '.count($animals_after_buy['Cow']) .' Кол-во кур на ферме: '.count($animals_after_buy['Chicken']).'<br/>';

$collected_products_after_buy = $farm->collectAnimalProducts($days_for_collect);
echo 'Кол-во собраного молока: '.$collected_products_after_buy['Cow'].' л. Кол-во собранных яиц: '.$collected_products_after_buy['Chicken'].' за '.$days_for_collect.' дней <br/>';

