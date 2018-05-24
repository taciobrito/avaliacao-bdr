<?php $this->view('template/header'); ?>

<div class="container">

    <h1>Questões</h1>

    <ol>
        <div class="alert alert-light" role="alert">
            <li><a href="<?= $this->url('index/questao1'); ?>">
                Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima
                "Fizz" em vez do número e para múltiplos de 5 imprima "Buzz". Para números múltiplos 
                de ambos (3 e 5), imprima "FizzBuzz".</a>
            </li>
        </div>
            
        <div class="alert alert-light" role="alert">
            <li><a href="<?= $this->url('index/questao2'); ?>">
               Refatore o código abaixo, fazendo as alterações que julgar necessário.</a>
            </li>
        </div>
        <div class="alert alert-light" role="alert">
            <li><a href="<?= $this->url('index/questao3'); ?>">
               Refatore o código abaixo, fazendo as alterações que julgar necessário.</a>
            </li>
        </div>
        <div class="alert alert-light" role="alert">
            <li><a href="<?= $this->url('index/questao4'); ?>">
               Desenvolva uma API Rest para um sistema gerenciador de tarefas 
               (inclusão/alteração/exclusão). As tarefas consistem em título e descrição, 
               ordenadas por prioridade.</a>
            </li>
        </div>
    </ol>

</div>

<?php $this->view('template/footer'); ?>
