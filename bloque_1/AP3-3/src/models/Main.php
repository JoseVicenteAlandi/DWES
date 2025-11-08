<?php

require_once __DIR__ . '/../core/Database.php';

class Tarea
{
    private array $data;

    public function __construct()
    {
    }

    public function getTodas(): array
    {
        $db = Database::getInstance();
        $sql = "SELECT * FROM tareas";
        $result = $db->executeSQL($sql);
        $tareas = [];
        foreach ($result as $row) {
            $tareas[] = $row;
        }
        $this->data = $tareas;
        return $this->data;
    }

}