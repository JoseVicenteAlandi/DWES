<?php
$host = "mariadb-server";
$user = "root";
$password = "root";
$dbname = "AP1";

$mysqli = new mysqli($host, $user, $password, $dbname);

if ($mysqli->connect_errno) {
    die("Error de conexión: " . $mysqli->connect_error);
}
echo "Conexión exitosa";

$sql="select * from usuarios";
$resultado=$mysqli->query($sql);
while ($fila = $resultado->fetch_assoc()) {
    echo"el usuario" . $fila["nombre"] . "posee la id" . $fila["id"] . "y su estado es: ". $fila["estado"] . "<br>";
}

$sql =  "INSERT INTO usuarios (nombre, id, estado) 
        VALUES ('Largo', '6767', '0')";


if ($mysqli->query($sql) === TRUE) {
    echo "Se ha realizado la inserción con la nueva id: ". $fila["id"] . "<br>";
} else {
    echo "Error: " . $mysqli->error;
}

$estado=1;
$id=6767;

$sql = "UPDATE usuarios SET estado = '$estado' WHERE id = '$id'";


if ($mysqli->query($sql) === TRUE) {
    echo "Se ha realizado correctamente la actualización de la id: ". $id. "<br>";
} else {
    echo "Error: " . $mysqli->error;
}

$id=6767;

$sql = "DELETE FROM usuarios WHERE id = '$id'";

if ($mysqli->query($sql) === TRUE) {
    echo "Se ha realizado correctamente el borrado de la id: ". $id. "<br>";
} else {
    echo "Error: " . $mysqli->error;
}


$mysqli->close();