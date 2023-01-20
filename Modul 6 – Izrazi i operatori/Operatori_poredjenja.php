<?php

/*
    - JEDNAKO (==)
    - VRSTA PODATAKA I VRIJEDNOST IDENTIČNI (===)
    - NIJE JEDNAKO (!= / <> / !==)
    - VEĆE OD (>)
    - MANJE OD (<)
    - VEĆE ILI JEDNAKO (>=)
    - MANJE ILI JEDNAKO (<=)
*/

#JEDNAKO (==)

$first_name = "Marko";
$second_name = "Marko";
$fullname =  $first_name . " , " . $second_name;

echo ($first_name == $second_name) ? "Isto ime" : "Nije isto ime";
echo "<br>";

#VRSTA PODATAKA I VRIJEDNOST IDENTIČNI (===)

$number1 = 15;
$number2 = 15;

echo ($number1 === $number2) ? "Brojevi se poklapaju!" : "Brojevi se ne poklapaju!";
echo "<br>";
$number3 = "15";
echo ($number1 === $number2) ? "Brojevi se poklapaju!" : "Brojevi se ne poklapaju!";
echo "<br>";

#NIJE JEDNAKO (!= / <> / !==)

$boja1 = "Crvena";
$boja2 = "Crvena";
$boja3 = "Crna";
$boja4 = "Narandzasta";

echo ($boja1 != $boja2) ? "Ovo nisu iste boje!" : "Ovo su iste boje";
echo "<br>";
echo ($boja3 != $boja4) ? "Ovo nisu iste boje!" : "Ovo su iste boje";
echo "<br>";
echo ($boja1 <> $boja2) ? "Ovo nisu iste boje!" : "Ovo su iste boje";
echo "<br>";
echo ($boja3 !== $boja4) ? "Ovo nisu iste boje!" : "Ovo su iste boje";
echo "<br>";

#VEĆE OD (>) - MANJE OD (<) 

$ime1 = "Marko";
$ime2 = "Dragana";

$go1 = 32;
$go2 = 26;

echo ($go1 > $go2) ? "$ime1 je stariji od $ime2" : "$ime1 je mladji od $ime2";
echo "<br>";

#VEĆE ILI JEDNAKO (>=) - MANJE ILI JEDNAKO (<=)

$name1 = "Vladan";
$name2 = "David";
$name3 = "Milan";

$agelimit = 10;
$nameage1 = 4;
$nameage2 = 64;
$nameage3 = 8;

echo ( $nameage1 <= $agelimit) ? "$name1 moze voziti auto" : "Izvinite, $name1 ne moze voziti auto!";
echo "<br>";
echo ( $nameage2 <= $agelimit) ? "$name2 moze voziti auto" : "Izvinite, $name2 ne moze voziti auto!";
echo "<br>";
echo ( $nameage3 <= $agelimit) ? "$name3 moze voziti auto" : "Izvinite, $name3 ne moze voziti auto!";
echo "<br>";

?>