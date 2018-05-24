<!DOCTYPE html>
<html>
    <head>
        <title> Avaliação BDR </title>

        <link rel="stylesheet" type="text/css" href="<?= $this->url('assets/css/style.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?= $this->url('assets/css/jquery-ui.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?= $this->url('assets/css/bootstrap.min.css'); ?>">

    </head>

    <body>

	<!-- Image and text -->
	<nav class="navbar navbar-light bg-light">
	  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="<?= $this->url(); ?>">
	    <img src="<?= $this->url('assets/img/logo.jpg') ?>" width="30" height="30" class="d-inline-block align-top" alt="">
	    Avaliação
	  </a>

	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
		  <li class="nav-item">
		    <a class="nav-link" href="<?= $this->url(); ?>">Questões</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="<?= $this->url('tarefas'); ?>">Tarefas</a>
		  </li>
		</ul>
	</div>
</nav>