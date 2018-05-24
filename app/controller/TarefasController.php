<?php
    namespace App\Controller;

    use System\Controller;

    class TarefasController extends Controller 
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $tarefas = file_get_contents("http://localhost/avaliacao-bdr/TarefasService");
            echo "<pre>";
            print_r(json_decode($tarefas));exit;
            $this->view('tarefas', compact('tarefas'));
        }

    }
