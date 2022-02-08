<?php
class Controller
{
    protected function view($view, $data = [])
    {
        require_once('../app/views/' . $view . '.php');
    }

    protected function model($model)
    {
        require_once('../app/models/' . $model . '.php');
        $model = new $model;
        return $model;
    }
}
