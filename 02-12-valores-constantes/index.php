<?php

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.12 - Constantes e constantes mágicas");

/*
 * [ constantes ] https://php.net/manual/pt_BR/language.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);

define("CURSE", "Full Stacl PHP");
const AUTHOR = "Robson";

$formation = true;

if ($formation) {
    define("CURSE_TYPE", "Formação");
} else {
    define("CURSE_TYPE", "Curso");
}

echo "<p>CURSE_TYPE CURSE AUTHOR </p>";
echo "<p>{CURSE_TYPE} {CURSE} {AUTHOR} </p>";
echo "<p>" . CURSE_TYPE . "" . CURSE . " de " . AUTHOR . "</p>";
/*
 * [ constantes mágicas ] https://php.net/manual/pt_BR/language.constants.predefined.php
 */
fullStackPHPClassSession("constantes mágicas", __LINE__);
