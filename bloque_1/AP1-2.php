<?php
$datos = [];

foreach ($_GET as $clave => $valor){
    $datos[$clave] = $valor;
}
if($valor == null || $valor == "") {
    echo "No se ha recibido ningún dato o es un valor nulo";
}

elseif (is_numeric($valor)){
    echo "Se ha recibido un numero";
}

else{
    echo "Se ha recibido una cadena de caracteres";
}




?>