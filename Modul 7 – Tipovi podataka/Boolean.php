<?php

    #BOOLEAN

    //Boolean ima dva tipa a to su(TRUE i FALSE)!!!

    $flag1 = TRUE;
    $flag2 = FALSE;
    echo ($flag1) ? "True" : "False";
    echo "<br>";

    //Provjera da li je korisnik ulogovan ili nije

    $login = true;
    $nameuser = "Marko, Markovic";
    echo ( $login && $nameuser ) ? "Korisnik $nameuser je ulogovan" : "Korisnik $nameuser nije ulogavan";
    echo "<br>";

    //String unutar Boolean tipa

    $login = true;
    $nameuser = null;
    echo ( $login && $nameuser ) ? "Korisnik $nameuser je ulogovan" : "Korisnik $nameuser nije ulogavan";
    echo "<br>";

    //Potvrda korisnika

    $name = "Filip";
    echo ( $name === "Filip" ) ? "Da to je $name" : "Ne to nije $name";
    echo "<br>";


?>