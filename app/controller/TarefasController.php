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
            $tarefas = json_decode(file_get_contents("http://localhost/avaliacao-bdr/TarefasService"));
            $this->view('tarefas', compact('tarefas'));
        }

    }
