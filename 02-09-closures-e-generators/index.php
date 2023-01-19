<?php

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);

$myAge = function ($year) {
    $age = date("Y") - $year;
    return "<h5> Você tem {$age} Anos! </h5>";
};
echo $myAge(2002);

$priceBrl = function ($price) {
    return number_format($price, 2, ",", ".");
};

echo "<p>O projeto custa R$ {$priceBrl(15000)}. Vamos fechar? </p>";

$myCart = [];
$myCart["totalPrice"] = 0;
$cartAdd = function ($item, $qtd, $price) use (&$myCart) {
    $myCart[$item] = $qtd * $price;
    $myCart["totalPrice"] += $myCart[$item];
};
$cartAdd("HTML5", 1, 497);
$cartAdd("jQuery", 2, 497);

var_dump($myCart);
/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);

$iterator = 1000000;

function generatorDate($days)
{
    for ($day = 1; $day < $days; $day++) {
        yield date("d/m/y", strtotime("+{$day}days"));
    }
}

echo "<div style='text-align: center'>";
foreach (generatorDate($iterator) as $date) {
    echo "<small class='tag'>{$date}</small>" . PHP_EOL;
}
echo "</div>";