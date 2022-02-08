<?php
class Update extends Controller
{
    public function index()
    {
        $getData = $this->model('user_models')->getById($_GET['id']);
        if (!$getData || is_null($getData)) {
            echo "<script> alert('Data tidak ditemukan'); window.location.replace('" . BASE_URL . "'); </script>";
            die();
        }

        $data = [
            'dataById' => $getData
        ];

        $this->view('update', $data);
    }

    public function updateData($id)
    {
        $this->model('user_models')->update($id, $_POST);
    }
}
