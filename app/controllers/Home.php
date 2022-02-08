<?php
class Home extends Controller
{
    public function Index()
    {
        $data = [
            'data' => $this->model('user_models')->showAll()
        ];

        $this->view('index', $data);
    }
}
