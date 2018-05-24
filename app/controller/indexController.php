<?php
    namespace App\Controller;

    use System\Controller;
    use App\Model\ExampleModel;
    use App\Model\VendasModel;

    class IndexController extends Controller 
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $questoes = array();
            $this->view('index', compact('questoes'));
        }

        public function questao1()
        {
            $this->view('questao_1');
        }

        public function questao2()
        {
            $this->view('questao_2');
        }

        public function questao3()
        {
            $this->view('questao_3');
        }

        public function questao4()
        {
            $this->view('questao_4');
        }

    }
