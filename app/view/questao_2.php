<?php $this->view('template/header'); ?>

<div class="container">

    <h1>Questão 2</h1>

    <div class="alert alert-dark" role="alert">
        Refatore o código abaixo, fazendo as alterações que julgar necessário.
        
        <div class="card">
        	<div class="card-body">
		        <code>
					3. if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
					<br>
					4. header("Location: http://www.google.com");
					<br>
					5. exit();
					<br>
					6. } elseif (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true) {
					<br>
					7. header("Location: http://www.google.com");
					<br>
					8. exit();
					<br>
					9. }	
		        </code>
        	</div>
        </div>
    </div>

    <div class="card">
    	<div class="card-header">
		    Refatorado
		</div>
		<div class="card-body">
        	<code>
				if (!empty($_SESSION['loggedin']) || !empty($_COOKIE['Loggedin'])) {
				<br>
				header("Location: http://www.google.com");
				<br>
				}	
	        </code>
    	</div>

    </div>

	<hr>
    <a href="javascript:history.go(-1)" class="btn btn-primary">Voltar</a>
</div>

<?php $this->view('template/footer'); ?>
