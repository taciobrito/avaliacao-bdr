<?php $this->view('template/header'); ?>

<div class="container">

    <h1>Questão 3</h1>

    <div class="alert alert-dark" role="alert">
        Refatore o código abaixo, fazendo as alterações que julgar necessário.
        
        <div class="card">
        	<div class="card-body">
		        <code>
					3. class MyUserClass
					<br>
					4. {
					<br>
					5. public function getUserList()
					<br>
					6. {
					<br>
					7. $dbconn = new DatabaseConnection('localhost','user','password');
					<br>
					8. $results = $dbconn->query('select name from user');
					<br>
					9.
					<br>
					10. sort($results);
					<br>
					11.
					<br>
					12. return $results;
					<br>
					13. }
					<br>
					14. }
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
    			class Connection
    			<br>
    			{
    			<br>
    				private $connection;
    			<br>
    			<br>
    				public static function getConnection()
    			<br>
    				{
    			<br>
    					$this->connection = new DatabaseConnection('localhost', 'database', 'user','password');
    			<br>
    					return $this->connection;
    			<br>
    				}
    			<br>
    			<br>
    			}
    			<br>
    			<br>
    			class MyUserClass
    			<br>
    			{
    			<br>
    			<br>
    				public function getUserList()
    			<br>
    				{
    			<br>
    					$dbconn = Connection::getConnection();
    			<br>
    					$results  = $dbconn->query('SELECT name FROM user ORDER BY ASC');
    			<br>
    					return $results;
    			<br>
    				}
    			<br>
    			<br>
    			}
	        </code>
    	</div>

    </div>

	<hr>
    <a href="javascript:history.go(-1)" class="btn btn-primary">Voltar</a>
</div>

<?php $this->view('template/footer'); ?>
