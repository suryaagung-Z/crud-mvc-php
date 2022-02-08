<?php
class Add extends Controller
{
    public function Index()
    {
        $this->view('add');
    }

    public function addData()
    {
        $this->model('user_models')->add($_POST);
    }
}
