<?php 
    namespace App\Model;

    use System\Model;

    class TarefaModel extends Model 
    {
        public $_table = 'tarefas';
        public $_class = 'App\Model\TarefaModel';

        public function listAll() 
        {
            $params = array('order_by' => 'prioridade ASC');
            return $this->select($params)->getAll();
        }

        public function listOne($id) 
        {
            $params = array('where' => 'id = ' . $id);
            return $this->select($params)->get();
        }
    }
