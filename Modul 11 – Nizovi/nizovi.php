<?php

    #NIZOVI

    $arr = [1, 2, 3];

    var_dump($arr);
    echo "<br>";

    print_r($arr);
    echo "<br>";

    #INDEXIRANI NIZOVI

    echo $arr[0] . "<br>";
    echo $arr[1] . "<br>";
    echo $arr[2] . "<br>";
    
    #DUZINA NIZA

    echo "Duzina niza: " . count($arr);
    
    for($count = 0; $count < count($arr); $count++){
        echo $arr[$count];
        echo "$arr[$count]";
    }
    echo "<br>";

    #STAMPANJE CIJELOG NIZA

    $arr = [ "PON", "UTO", "SRI", "CET", "PET", "SUB", "NED"];
    var_dump($arr);

    $i = 0;
    foreach($arr as $values){
        echo "[$i] => $values" . "<br>";
        $i++;
    }
    echo "<br>";

    #ASOCIJATIVNI NIZ

    $arr = [ 0 => "PON", 1 => "UTO", 2 => "SRI", 3 => "CET", 4 => "PET", 5 => "SUB", 6 => "NED"];
    var_dump($arr);
    echo "<br>";
    foreach($arr as $values){
        echo $values . "<br>";
    }

    echo "<br>";

    #VISEDIMENZIONALNI NIZOVI

    $arr1 = [
        [ 0, 1, 2, 3, 4, 5 ],
        [ 6, 7, 8 ],
        [ 9, 10 ],
    ];
    var_dump($arr1);
    echo "<br>";

    foreach($arr1 as $value){
        var_dump($value) . "<br>";
    }
    echo "<br>";

    #FUNKCIJA 'unset()'

    unset($arr[4]);
    print_r($arr);
    echo "<br>";

    #SORTIRANJE NIZOVA

    sort($arr);//FUNCKIJA 'sort()'
    print_r($arr);
    echo "<br>";
    rsort($arr);//FUNCKIJA 'rsort()'
    print_r($arr);
    echo "<br>";
    asort($arr);//FUNCKIJA 'asort()'
    print_r($arr);
    echo "<br>";
    ksort($arr);//FUNCKIJA 'ksort()'
    print_r($arr);
    echo "<br>";

?>