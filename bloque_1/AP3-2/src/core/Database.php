<?php
class Database{
    private static $conexion;
    private function __construct()
    {
        $configPath = __DIR__ . '/../../config/dbConfig.json';
        if (!file_exists($configPath)) {
            die('No se encuentra el archivo de configuración de la base de datos.');
        }
        self::$dbConfig = json_decode(file_get_contents($configPath), true);
        if (!self::$dbConfig) {
            die('Error al leer el archivo de configuración de la base de datos.');
        }
        $this->getConnection();
    }

    public static function getInstance()
    {
        if (self::$instancia === null) {
            self::$instancia = new DataBase();
        }
        return self::$instancia;
    }

    private function getConnection()
    {
        $host = self::$dbConfig["host"];
        $username = self::$dbConfig["user"];
        $password = self::$dbConfig["password"];
        $database = self::$dbConfig["database"];

        self::$conexion = new \mysqli($host, $username, $password, $database);
    }

    public function executeSQL($sql)
    {

        return self::$conexion->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

    public function __destruct()
    {
        if (self::$conexion != null) {
            self::$conexion->close();
        }
    }
}