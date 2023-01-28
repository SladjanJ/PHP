<?php

    #IZUZECI

    function dijeljenje($djeljenik, $djelilac) {
        if($djelilac == 0) {
            throw new Exception("Dijeljenje sa nulom!!!");
        }
        return $djeljenik / $djelilac;
    }

    try {
        echo dijeljenje(5, 0);
    } catch(Exception $e) {
        echo "Ne mozemo dijeliti! <br>";
    } finally {
        echo "Uspjesno smo podijelili ova dva broja!";
    }

?>