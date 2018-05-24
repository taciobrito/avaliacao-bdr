<?php $this->view('template/header'); ?>

<div class="container">
    <h1>Tarefas</h1>

    <table class="table table-striped table-hovered">
        <tr>
            <th>#</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Prioridade</th>
        </tr>
    
        <tbody id="sortable">
            <?php foreach ($tarefas as $tarefa) { ?>
                <tr>
                    <td><?= $tarefa->id; ?></td>
                    <td><?= $tarefa->titulo; ?></td>
                    <td><?= $tarefa->descricao; ?></td>
                    <td><?= $tarefa->prioridade; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <hr>
    <a href="javascript:history.go(-1)" class="btn btn-primary">Voltar</a>

</div>

<?php $this->view('template/footer'); ?>

<script>
  $( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  } );
</script>
