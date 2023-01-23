<?php

    #STRINGOVI

    $br1 = 15;
    $name = "Marko, Markovic";

    //NOWDOC(DOC_LABEL)
    //Sa navodnicama

    echo <<< "DOC_LABEL"
    Popularan skriptni jezik opšte namjene <br>
    koji je posebno prikladan za web razvoj. <br>
    Brz, fleksibilan i praktičan, PHP pokreće sve, <br>
    od vašeg bloga do najpopularnijih web stranica na svijetu. <br>
   
    Moje ime je $name i imam $br1 godina! <br><br>
   
    DOC_LABEL;

    //Sa apostrofima

    echo <<< 'DOC_LABEL'
    Popularan skriptni jezik opšte namjene <br>
    koji je posebno prikladan za web razvoj. <br>
    Brz, fleksibilan i praktičan, PHP pokreće sve, <br>
    od vašeg bloga do najpopularnijih web stranica na svijetu. <br>
   
    Moje ime je $name i imam $br1 godina! <br>
   
    DOC_LABEL;

    #STRLEN - duzina stringa

    $tag = "PHP je praktican,fleksibilan programski jezik";

    echo "Ovo je duzina stringa " . '$tag:' . strlen($tag) . "<br>";

    #STRPOS -pozicija stringa

    $pozicija_stringa = "PHP";
    echo "Pozicija rijeci \"PHP\" u recenici $tag je " . strpos($tag , $pozicija_stringa) . "<br><br>";

    #WORDWRAP
    
    $tag1 = "Popularan skriptni jezik opšte namjene koji je posebno prikladan za web razvoj.Brz, fleksibilan i praktičan, PHP pokreće sve, od vašeg bloga do najpopularnijih web stranica na svijetu";
    echo wordwrap($tag1, 25) . "<br>";
    echo $tag1 .  "<br><br>";

    #UPPER AND LOWER CASE

    echo strtoupper($tag1) . "<br>";
    echo strtolower($tag1) . "<br><br>";

    #SHUFFLE STRING

    echo str_shuffle($tag1) . "<br><br>";

    #STRREV - REVERSE STRING

    echo strrev($tag1) . "<br><br>";

?>