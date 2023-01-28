<?php

    #FAJLOVI

    $file = fopen("test.php", "w+");

    fwrite($file, "Ovo je pozdravni tekst 1\r\n");
    echo "<br>";
    fwrite($file, "Ovo je pozdravni tekst 2\r\n");
    echo "<br>";
    echo readfile("test.php");
    echo "<br>";
    fclose($file);
    echo "<br>";

?>