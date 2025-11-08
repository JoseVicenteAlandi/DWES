<?php
$host = "mariadb-server";
$user = "root";
$password = "root";
$dbname = "AP1";

$mysqli = new mysqli($host, $user, $password, $dbname);

if ($mysqli->connect_errno) {
    die("Error de conexión: " . $mysqli->connect_error);
}
echo "Conexión exitosa<br>";

$sql = "SELECT * FROM usuarios";
$resultado = $mysqli->query($sql);
while ($fila = $resultado->fetch_assoc()) {
    echo "El usuario " . $fila["nombre"] . " posee la id " . $fila["id"] . " y su estado es: " . $fila["estado"] . "<br>";
}

$nombre = "Nacho";
$estado = 1;
$sql2 = "INSERT INTO usuarios (nombre, estado) VALUES ('$nombre', $estado)";
if ($mysqli->query($sql2) === TRUE) {
    echo "Se ha realizado la inserción con la nueva id: $mysqli->insert_id <br>";
} else {
    echo "Error en inserción: " . $mysqli->error . "<br>";
}

$estado = 1;
$id = 6767;
$sql3 = "UPDATE usuarios SET estado = '$estado' WHERE id = '$id'";
if ($mysqli->query($sql3) === TRUE) {
    echo "Se ha realizado correctamente la actualización de la id: " . $id . "<br>";
} else {
    echo "Error en actualización: " . $mysqli->error . "<br>";
}

$id = 1234;
$sql4 = "DELETE FROM usuarios WHERE id = '$id'";
if ($mysqli->query($sql4) === TRUE) {
    echo "Se ha realizado correctamente el borrado de la id: " . $id . "<br>";
} else {
    echo "Error en borrado: " . $mysqli->error . "<br>";
}

$mysqli->close();


