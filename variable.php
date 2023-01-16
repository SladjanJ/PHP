<?php
echo "<hr>";
#DEFINISANJE PROMENLJIVIH(STRING, INT)

$name = "Marko";
$godine = 18;

//PHP je case sensitive

echo "Ja se zovem $name <br>";
EcHo 'Ja se zovem $godine <br>';
eCho "Ja se zovem " . $name . "<br>";
ECHO "Ja se zovem " . $godine . "<br>";

echo "<hr>";
#FUNKCIJE I PROMENLJIVE

function sabiranje() {

    $br1 = 10;
    $br2 = 20;
    $zbir = $br1 + $br2;

    echo "Zbir broja $br1 i $br2 je: $zbir" . "<br>";

}

function oduzimanje(){

    $br1 = 20;
    $br2 = 10;
    $razlika = $br1 - $br2;

    echo "Razlika broja $br1 i $br2 je $razlika" . "<br>";
}

function mnozenje(){

    $br1 = 10;
    $br2 = 10;
    $proizvod = $br1 * $br2;

    echo "Proizvod broja $br1 i $br2 je $proizvod" . "<br>";
}

function dijeljenje(){

    $br1 = 100;
    $br2 = 10;
    $kolicnik = $br1 / $br2;

    echo "Kolicnik broja $br1 i $br2 je $kolicnik" . "<br>";
}

function dijeljenje_sa_ostatkom(){

    $br1 = 101;
    $br2 = 10;
    $kolicnik = $br1 % $br2;

    echo "Kolicnik broja $br1 i $br2 je $kolicnik" . "<br>";
}

sabiranje();
oduzimanje();
mnozenje();
dijeljenje();
dijeljenje_sa_ostatkom();


echo "<hr>";
#LOCAL VARIABLE

$name = "Balsa";

function print_name() {
    //Opseg ove varijable je ograničen na ovu funkciju.
    //Ova varijabla "umire" nakon što je funkcija završena.

    $name = "PHP!";//pva se varijabla u ovoj funkciji zove lokalna varijabla 
}

print_name();
echo $name;

echo "<hr>";
#GLOBAL VARIABLA
//Primjer 1

global $ime;

    $ime = "Filip";

function ime() {
        
        $ime = "PHP!";
    }
ime();
echo $ime ."<br>";

//Primjer 2

global $poruka;
$poruka = "Ovo je globalna promjenjiva";

    function globalna_promenljiva() {
        
        global $poruka;
        echo $poruka;
    }

//U ovoj funkciji promenljiva (poruka) je definisana kao globalna 
globalna_promenljiva();

echo "<hr>";
#STATIC VARIABLA
//Koristi se kada neku promenljivu zelimo da zadrzimo unutar funkcije!!!

//Primjer 1 bez staticne prmenljive

function counter(){
    $count = 1;
    echo $count . "<br>";
    $count = $count + 1;
}
counter();
counter();
counter();
counter();
counter();

echo"<h3>STATIC VARIABLE</h3>";
//Primjer 2 sa staticnom promenljivom

function counter_static(){
    static $count = 1;
    echo $count . "<br>";
    $count = $count + 1;
}

counter_static();
counter_static();
counter_static();
counter_static();
counter_static();

echo "<hr>";
#SUPER-GLOBALNE PROMENLJIVE
//Ovo su ujedno i PredefinedVariables 
/*Postoji nekoliko definisanih varijabli u PHP-u i to su:

-$GLOBALS - Referira sve varijable dostupne u globalnom opsegu
-$_SERVER - Informacije o serveru i izvršnom okruženju
-$_GET - HTTP GET varijable
-$_POST -  HTTP POST varijable
-$_FILES - Varijable za prijenos HTTP datoteke
-$_COOKIE -  HTTP Cookies
-$_SESSION - Session varijable
-$_REQUEST - HTTP Request varijable
-$_ENV - Environment variables

*/

//Global varijabla
global $jezik;
    $jezik = "PHP";
    echo $GLOBALS['jezik'] . "<br>";

//Server varijable    
echo "Lokacija fajla: " .  $_SERVER['PHP_SELF'] . "<br>";

//Primjer

function programski_jezik() {
       echo $GLOBALS['jezik'];
    }

programski_jezik();

echo "<hr>";

#VARIABLE OF VARIABLES

    $osoba = "Marko, Markovic";
    $musko = "osoba";
    $pol = "musko";

    echo $pol . "<br>";
    echo $$pol . " = $musko <br>";
    echo $$$pol . " = $osoba <br>";

//Stampanje variable preko druge variable 

echo "<hr>";
#Varijabla isset()

$prezime;

echo isset($prezime) ? "Promenljiva ima vrijednost": "Promenljiva nema vrijednost <br>";

$prezime = "Dragovic";

echo isset($prezime) ? "Promenljiva ima vrijednost": "Promenljiva nema vrijednost";

echo "<hr>";

?>