<?php
class Delete extends Controller
{
    public function index()
    {
        $getData = $this->model('user_models')->getById($_GET['id']);
        if (!$getData || is_null($getData)) {
            echo "<script> alert('Data tidak ditemukan'); window.location.replace('" . BASE_URL . "'); </script>";
            die();
        }

        $this->model('user_models')->delete($_GET['id'], $getData['foto']);
    }
}
