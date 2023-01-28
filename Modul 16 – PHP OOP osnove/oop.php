<?php

    #OOP

    class Voce{
        public $ime;
            function set_ime($ime) {
                $this->ime = $ime;
    }
    }
        $jabuka = new Voce();
        $jabuka->set_ime("Jabuka");

    echo $jabuka->ime;
    
?>