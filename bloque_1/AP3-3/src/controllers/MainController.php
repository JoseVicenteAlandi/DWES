<?php
namespace AP33\Controllers;

use AP33\Models\Tareas;
use AP33\Views\ListadoTareas;

class MainController
{
    public function main()
    {
        $tareas = new Tareas();
        $datos = $tareas->findAll();
        new ListadoTareas($datos);
    }

    public function default()
    {
        echo "No se ha encontrado esta ruta.";
    }
}
