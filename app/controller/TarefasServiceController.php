<?php
    namespace App\Controller;

    use System\Controller;
    use App\Model\TarefaModel;

    class TarefasServiceController extends Controller 
    {
        private $tarefa;

        public function __construct()
        {
            parent::__construct();
            $this->tarefa = new TarefaModel();
        }

        public function index()
        {
            if ($this->getParam('id')) {
                echo $this->json($this->tarefa->listOne($this->getParam('id')));
            } else {
                echo $this->json($this->tarefa->listAll());
            }
        }

        public function insert()
        {
            $dados = $this->post();
            $count = count($this->tarefa->listAll());
            $dados['prioridade'] = $count + 1;
            $tarefa = $this->tarefa->create($dados);
            if (!$tarefa) {
                http_response_code(400);
            } else {
                http_response_code(201);
            }
            echo $this->json($tarefa);
        }

        public function update()
        {
            if ($this->getParam('id')) {
                if(!$this->tarefa->listOne($this->getParam('id'))) {
                    http_response_code(400);
                    echo $this->json("Tarefa não encontrada");
                } else {
                    $tarefa = $this->tarefa->update($this->post(), 'id = ' . $this->getParam('id'));
                    if (!$tarefa) {
                        http_response_code(400);
                    } else {
                        http_response_code(200);
                    }
                    echo $this->json($tarefa);
                }
            } else {
                http_response_code(400);
                echo $this->json("É necessário passar o ID");
            }
        }

        public function delete()
        {
            if ($this->getParam('id')) {
                if(!$this->tarefa->listOne($this->getParam('id'))) {
                    http_response_code(400);
                    echo $this->json("Tarefa não encontrada");
                } else {
                    $this->tarefa->delete('id = '.$this->getParam('id'));
                    http_response_code(204);
                    echo $this->json("");
                }
            } else {
                http_response_code(400);
                echo $this->json("É necessário passar o ID");
            }
        }

    }
