<?php

class ListadoTareas
{
    private array $data;

    public function __construct(array $datos = null)
    {
        if (!is_null($datos)) {
            $this->data = $datos;
            $this->mostrarPlantilla();
        }
    }

    public function setData(array $data): void
    {
        $this->data = $data;
    }

    public function mostrarPlantilla(): void
    {
        echo '<h1>Listado de tareas</h1>';
        echo '<table border="1">';
        echo '<tr><th>ID</th><th>Tarea</th><th>Descripción</th><th>Fecha de creación</th><th>Fecha vencimiento</th></tr>';
        foreach ($this->data as $tarea) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($tarea['id']) . '</td>';
            echo '<td>' . htmlspecialchars($tarea['titulo']) . '</td>';
            echo '<td>' . htmlspecialchars($tarea['descripcion']) . '</td>';
            echo '<td>' . htmlspecialchars($tarea['fecha_creacion']) . '</td>';
            echo '<td>' . htmlspecialchars($tarea['fecha_vencimiento']) . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }

    public static function mostrar($tareas)
    {
        $vista = new self();
        $vista->setData($tareas);
        $vista->mostrarPlantilla();
    }
}

