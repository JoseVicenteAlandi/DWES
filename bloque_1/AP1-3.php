<?php
$array = [1 => "primero",
    3 => "segundo",
    5 => "tercero",
    7 => "cuarto",
    9 => "quinto",
    11 => "sexto"];

$suma=0;

foreach($array as $clave => $value){
    if($value == "primero"||$value == "tercero"||$value == "quinto") {
        echo"Estas en una posición impar<br>";
        $impar=true;
        $par=false;

    }
    if($value == "segundo"||$value == "cuarto"||$value == "sexto") {
        echo"Estas en una posición par<br>";
        $impar=false;
        $par=true;

    }

   $suma+=$clave;
    echo "$suma<br>";

    if($suma>5&&$suma<10){
        echo "El valor de la suma es mayor que 5<br>";
    }

    if($suma>10&&$suma<20){
        echo "El valor de la suma es mayor que 10<br>";
    }
    if($suma>20){
        echo "El valor de la suma es mayor que 20<br>";
    }
}

?>