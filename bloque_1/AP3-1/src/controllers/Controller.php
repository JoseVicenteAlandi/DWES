<?php
require_once __DIR__ . '/../models/Model.php';
require_once __DIR__ . '/../views/View.php';

class Controller
{
    private Model $model;
    private View $view;

    public function __construct()
    {
        $this->model = new Model();
        $this->view = new View();
    }

    public function mostrarPagina(): void
    {
        $data = $this->model->getData();
        $this->view->render($data);
    }
}
