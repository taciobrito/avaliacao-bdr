<?php $this->view('template/header'); ?>

<div class="container">

    <h1>Questão 4</h1>

    <div class="alert alert-light" role="alert">
        Desenvolva uma API Rest para um sistema gerenciador de tarefas
        (inclusão/alteração/exclusão). As tarefas consistem em título e descrição, 
        ordenadas por prioridade.
        <br>
        <br>
        <ul class="list-unstyled">
        	<li>Desenvolver utilizando:
		        <ul>
		        	<li>Linguagem PHP (ou framework CakePHP);</li>
		        	<li>Banco de dados MySQL;</li>
		        </ul>
        	</li>
        <br>
        	<li>Diferenciais:
		        <ul>
		        	<li>Criação de interface para visualização da lista de tarefas;</li>
		        	<li>Interface com drag and drop;</li>
		        	<li>Interface responsiva (desktop e mobile);</li>
		        </ul>
        	</li>
        </ul>
    </div>
      

    <div class="card">
    	<div class="card-header">
		    Gerenciador de Tarefas
		</div>
		<div class="card-body">
        	<a href="<?= $this->url('tarefas'); ?>">Acesse aqui</a>
    	</div>
    </div>

	<hr>
    <a href="javascript:history.go(-1)" class="btn btn-primary">Voltar</a>
</div>

<?php $this->view('template/footer'); ?>
