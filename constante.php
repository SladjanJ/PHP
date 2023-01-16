<?php

#DEFINICJA CONSTANTE

define ("NAME", "Marko");
$name = NAME;

echo "Ja se zovem $name <br>";
echo "Ja se zovem NAME <br>";
echo 'Ja se zovem NAME '. "<br>";
echo "Ja se zovem ". NAME . "<br>";

/*
Constante su lakse za koristenje za razliku od variable.
-Ne mora se stavljati znak dolar($) kao kod variabli 
-Definise se kljucnom rijecju "define" i moze imati samo jednu vrijednost
-Pisanje imena constanti su jasno propisana i ne smiju se krsiti!!!
*/

#MAGICNE CONSTANTE

echo __LINE__ . "<br>";
echo __FILE__ . "<br>";
echo __DIR__ . "<br>";
