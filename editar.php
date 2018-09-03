<?php
	include_once("conexao.php");
	session_start();
?>

<?php 
			

			$codigo = filter_input(INPUT_GET, 'codigo', FILTER_SANITIZE_NUMBER_INT);
			$_SESSION['codigo'] = $codigo;


			$query = mysql_query("SELECT * FROM usuarios WHERE codigo = '$codigo' ");

			while($registros = $query-> fetch_assoc()):
				$codigo = $rgistros['codigo'];
				$nome = $registros['nome'];
				$email = $registros['email'];
				$senha = $registros['senha'];
			endwhile;

?>
		

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atualização de registros</title>	
	<link rel="stylesheet" href="bibliotecas/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/pessoas.css">
</head>


<body>

	<header>
		<div class="container">
			<div class="row float-left">
				<h1> Editar Dados</h1>	
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

		<form method="POST" action="alterar.php">
			
			<div class="form-group">
				<label for="email">Nome</label>
				<input type="text" name="nome" id="nome" value ="<?php echo $nome ?> "  class="form-control"required autofocus>
			</div>

			<div class="form-group">
				<label for="email">E-mail</label>
				<input type="text" name="email" id="email"  value ="<?php echo $email ?> " class="form-control"required autofocus>
			</div>

			<div class="form-group">
				<label for="senha">Senha</label>
				<input type="password" name="senha" id="senha"  value ="<?php echo $senha ?> " class="form-control">
			</div>

			<input type="submit" value="alterar" class="btn btn-default">
		
		</form>



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
