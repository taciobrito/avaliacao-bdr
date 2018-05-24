# Instruções para executar o projeto:
1. O servidor de aplicação utilizado foi o Apache, executado pelo Xampp.
2. É necessário configurar o "base_url" no arquivo de configuração, loxalizado
em: app\config\Config.php
3. O banco de dados deve ser configurado através do arquivo database.php
localizado em: app\config\database.php
4. A página inicial apresenta a listagem das questões, ao clicar, é redirecionado
para a página interna de cada uma, contendo suas resoluções. No caso da questão 4,
é apresentado um link para a listagem de tarefas cadastradas.

# Instruções WebService
1. O projeto foi testado pelo PostMan
2. Abaixo é listado os end points do web service:
	Lista Tarefas | GET: /TarefasService
	Lista Tarefa por ID | GET: /TarefasService/id/{:id}
	Criar Tarefa | POST: /TarefasService/insert
	Atualiza Tarefa | POST: /TarefasService/update/id/{:id}
	Remover Tarefa | GET: /TarefasService/delete/id/{:id}

# MeuFrameworkPHP
O respectivivo Mini Framework PHP utilizado, foi de criação própria,
com a contribuição de algumas referências e colegas de trabalho, o mesmo
continua em desenvolvimento.

- Namespace
- Autoload
- PDO connection
- PHP OO