<?php
// AP1-6.php

class Database {
    private $host = "mariadb-server";
    private $user = "root";
    private $password = "root";
    private $dbname = "AP1";
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbname);
        if ($this->conn->connect_errno) {
            die("Error de conexión: " . $this->conn->connect_error);
        }
        echo "Conexión exitosa<br>";
    }

    public function insert($nombre, $estado) {
        $sql = "INSERT INTO usuarios (nombre, estado) VALUES ('$nombre', $estado)";
        if ($this->conn->query($sql) === TRUE) {
            echo "se ha insertado un nuevo usuario con la id: " . $this->conn->insert_id . "<br>";
        } else {
            echo "No se ha podido insertar: " . $this->conn->error . "<br>";
        }
    }

    public function selectAll() {
        $sql = "SELECT * FROM usuarios";
        $result = $this->conn->query($sql);
        while ($fila = $result->fetch_assoc()) {
            echo "El usuario " . $fila["nombre"] .
                " con la id " . $fila["id"] .
                " y su estado es: " . $fila["estado"] . "<br>";
        }
        $result->free();
    }

    public function selectById($id) {
        $sql = "SELECT * FROM usuarios WHERE id = '$id'";
        $result = $this->conn->query($sql);
        if ($fila = $result->fetch_assoc()) {
            echo "Usuario encontrado: " . $fila["nombre"] .
                " con la id: " . $fila["id"] .
                " y estado: " . $fila["estado"] . ")<br>";
        } else {
            echo "No se encontró usuario con la id $id<br>";
        }
        $result->free();
    }

    public function update($id, $estado) {
        $sql = "UPDATE usuarios SET estado = '$estado' WHERE id = '$id'";
        if ($this->conn->query($sql) === TRUE) {
            echo "Usuario con id $id se ha actualizado<br>";
        } else {
            echo "Error en actualización: " . $this->conn->error . "<br>";
        }
    }

    public function delete($id) {
        $sql = "DELETE FROM usuarios WHERE id = '$id'";
        if ($this->conn->query($sql) === TRUE) {
            echo "Usuario con id $id borrado<br>";
        } else {
            echo "Error en borrado: " . $this->conn->error . "<br>";
        }
    }

    public function __destruct() {
        $this->conn->close();
        echo "Conexión cerrada<br>";
    }
}

$db = new Database();
$db->selectAll();
$db->insert("Largo", 1);
$db->update(6767, 1);
$db->delete(1234);
$db->selectById(1);
