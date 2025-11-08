<?php

require_once __DIR__ . '/../models/Tarea.php';
require_once __DIR__ . '/../views/ListadoTareas.php';

class TareasController
{
    private Tarea $modelo;
    private ListadoTareas $vista;
    private array $datos;

    private function pedirDatos()
    {
        if (!isset($this->modelo)) {
            $this->modelo = new Tarea();
        }
        $this->datos = $this->modelo->getTodas();
    }

    public function enviarDatosVista()
    {
        if (!isset($this->vista)) {
            $this->vista = new ListadoTareas();
        }

        $this->pedirDatos();

        $this->vista->setData($this->datos);

        $this->vista->mostrarPlantilla();
    }

}

