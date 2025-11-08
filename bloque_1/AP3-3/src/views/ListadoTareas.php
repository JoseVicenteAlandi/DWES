<?php
namespace AP33\Views;

class ListadoTareas
{
    public function __construct(array $tareas)
    {
        echo "<h1>Listado de Tareas</h1>";
        echo "<ul>";
        foreach ($tareas as $tarea) {
            echo "<li>
                <a href='?ruta=detalle&params={$tarea['id']}'>
                    {$tarea['titulo']} - Vence: {$tarea['fecha_vencimiento']}
                </a>
            </li>";
        }
        echo "</ul>";
    }
}
