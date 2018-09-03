<?php

	include_once("conexao.php");

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$nacionalidade = $_POST['nacionalidade'];
	$senha = $_POST['senha'];


	$sql = mysql_query("INSERT INTO usuarios(nome, email, nacionalidade, senha) values('$nome', '$email', '$nacionalidade', '$senha')");


	$lines = mysql_affected_rows($conexao); //se der um erro de registro, ele vai exibir uma mensagem

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de registros</title>	
	<link rel="stylesheet" href="bibliotecas/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/pessoas.css">
</head>
<body>

	<header>
		<div class="container">
			<div class="row float-left">
				<h1> Confirmação de Cadastro</h1>
			</div>			
		</div>

		<div class="container">
			<div class="row float-right">
				<ul>
					<nav id="menu">	
						<li><a href="index.php">Home</a></li>
						<li><a href="cadastro.php">Cadastrar</a></li>
						<li><a href="login.php">Login</a></li>
					</nav>

				</ul>

			</div>
			
		</div>
	
	</header>

	<section>
		<?php
			if($lines == 1){
				echo "Cadastro confirmado";
			}else{
				echo "Já existe um usuário com esse email";
			}

		?>

	</section>

	<footer>

		<div class="row float-left">
			<h1>Luiz Fernando Alles</h1>
			<h1>Desenvolvedor Web</h1>
		</div>


	</footer>


</body>

		<script src = "bibliotecas/jquery/jquery.min.js"></script>
		<script src="bibliotecas/carousel/dist/owl.carousel.min.js"></script>
		<script src = "bibliotecas/bootstrap/js/bootstrap.min.js"></script>
		
</html>