<?php

namespace AP33\Models;

use AP33\Core\DataBase;

class Tareas
{
    public function __construct()
    {
    }

    public function findAll(): array
    {
        $db = DataBase::getInstance();
        $sql = "SELECT * FROM tareas";
        return $db->executeSQL($sql);
    }

    public function findById(int $id): ?array
    {
        $db = DataBase::getInstance();
        $sql = "SELECT * FROM tareas WHERE id = :id";
        $params = ['id' => $id];
        $result = $db->executeSQL($sql, $params);
        return $result ? $result[0] : null;
    }
}
