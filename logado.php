<?php

	include_once("conexao.php");

?>

</<?php 
	
	session_start();
	if(!isset($_SESSION['email']) or !isset($_SESSION['senha']) ){
		header("Location: login.php");
		exit;
	} 
 ?>


<html>
<head>
	<title>Logado</title>
	<link rel="stylesheet" href="bibliotecas/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/pessoas.css">
</head>
<body>
	<header>
		<div class="container">
			<div class="row float-left">
				<h1> Bem-vindo(a) à sua conta <?php echo $_SESSION['email'];?></h1>				
			</div>			
		</div>
		
		<div class="container">
				<div class="row float-right">
					<ul>
						<nav id="menu">	
							<li><a href="index.php">Home</a></li>
							<li><a href="cadastro.php">Cadastrar</a></li>
							<li><a href="editar.php">Editar minhas informações</a></li>
							<li><a href="logout.php">Sair</a></li>
						</nav>


					</ul>
					
				</div>
				
			</div>
		
	</header>

	<section>
		<div class="text-center">
			<p>Você está logado em sua conta</p>
		</div>
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