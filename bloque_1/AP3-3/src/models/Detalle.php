<?php

require_once __DIR__ . '/../core/Database.php';

class Tarea
{
    private array $data;

    public function __construct()
    {
    }


    public function getTaskById(int $id): ?array
    {
        $db = Database::getInstance();
        $sql = "SELECT * FROM tareas WHERE id = :id";
        $params = ['id' => $id];
        $result = $db->executeSQL($sql, $params);
        return $result ? $result[0] : null;
    }

}
