<?php
class DatabaseConnection {
    private static $instancia = null;
    private $conexion;

    private function __construct() {
        $this->conexion = new mysqli("localhost", "root", "root", "AP1");

        if ($this->conexion->connect_error) {
            die("Error: " . $this->conexion->connect_error);
        }
    }

    public static function getInstance() {
        if (self::$instancia == null) {
            self::$instancia = new DatabaseConnection();
        }
        return self::$instancia;
    }

    public function getConnection() {
        return $this->conexion;
    }
}

$conn = DatabaseConnection::getInstance()->getConnection();

$res = $conn->query("SELECT * FROM usuarios");

while ($row = $res->fetch_assoc()) {
    echo $row["id"] . " - " . $row["nombre"] . "<br>";
}
?>
