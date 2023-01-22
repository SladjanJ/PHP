<?php

    #ELSE-IF

    $t = date("H");

    if ($t < "10") {
        echo "Dobro jutro!";
    } elseif ($t < "20") {
        echo "Dobar dan!";
    } else {
        echo "Dobro vece!";
    }

?>