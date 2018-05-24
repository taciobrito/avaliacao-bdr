<?php $this->view('template/header'); ?>

<div class="container">

    <h1>Questão 1</h1>

    <div class="alert alert-light" role="alert">
        Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima
        "Fizz" em vez do número e para múltiplos de 5 imprima "Buzz". Para números múltiplos 
        de ambos (3 e 5), imprima "FizzBuzz".
    </div>

    <div class="card">
        <div class="card-header">
            Impressão
        </div>
        <div class="card-body">
            <?php 
                for ($i = 1; $i <= 100; $i++) { 
            		$imprime = '';
            		if ($i % 3 == 0)
            			$imprime .= 'Fizz';
            		if($i % 5 == 0)
            			$imprime .= 'Buzz';
            		if($imprime == '')
            			$imprime = $i;

            		echo $imprime;
            		echo ($i < 100 ) ? ' - ' : '';
                }
            ?>
            
        </div>
    </div>

	<hr>
    <a href="javascript:history.go(-1)" class="btn btn-primary">Voltar</a>
</div>

<?php $this->view('template/footer'); ?>
