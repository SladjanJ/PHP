<?php

    #FUNKCIJE

    function zbir($br1,$br2){
        $zbir = $br1 + $br2;
        return $zbir;
    }

    function razlika($br1,$br2){
        $razlika = $br1 - $br2;
        return $razlika;    
    }
    
    function proizvod($br1,$br2){
        $proizvod = $br1 * $br2;
        return $proizvod;
    }
    
    function kolicnik($br1,$br2){
        $kolicnik = $br1 / $br2;
        return $kolicnik;
    }

    echo zbir(5,5);
    echo "<br>";
    echo razlika(10,5);
    echo "<br>";
    echo proizvod(5,5);
    echo "<br>";
    echo kolicnik(10,5);
    echo "<br>";


?>