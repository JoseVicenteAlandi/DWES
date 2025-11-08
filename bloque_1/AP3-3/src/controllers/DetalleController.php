<?php
namespace AP33\Controllers;

use AP33\Models\Tareas;
use AP33\Core\DataBase;
use AP33\Views\DetalleTarea;

class DetalleController{
    public function detail($id = null){
        if(is_null($id)){
            $data = null;
        }else{
            $tarea = new Tareas(new DataBase());


            $data = $tarea->findById($id);
        }
        $view = new DetalleTarea($data);
    }
}