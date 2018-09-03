

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
				<h1> Cadastrar-se</h1>	
			</div>			
		</div>

		<div class="container">
			<div class="row float-right">
				<ul>
					<nav id="menu">	
						<li><a href="index.php">Home</a></li>
						<li><a href="cadastro.php">Cadastrar</a></li>
						<li><a href="editar.php">Editar</a></li>
						<li><a href="login.php">Login</a></li>
					</nav>

				</ul>
				
			</div>
			
		</div>
		
	</header>

	<section>
		
		<form method="POST" action="exec.php"> <!-- ideal usar esses 2, method é como ele vai ser enviado, melhor ser post, pois os dados não aparecem e action diz para onde ele vai -->
			<div class="form-group">
				<label for="nome">Nome</label> <!-- label serve para colocar uma descrição no campo-->
				<input type="text" name="nome" id="name" class="form-control" placeholder="Digite o seu nome" required autofocus > <!-- placeholder da uma sugestão para o usuário digitar e required torna o campo obrigatório, for-control é do bootstrap -->
			</div>

			<div class="form-group">
				<label for="email">E-mail</label>
				<input type="text" name="email" id="email" class="form-control" placeholder="seuemail@...." required autofocus>
			</div>

			<div class="form-group">
				<label for="nacionalidade">Nacionalidade</label>
				<input type="text" name="nacionalidade" id="nacionalidade" class="form-control" placeholder="Digite sua nacionalidade" required autofocus>
			</div>

			<div class="form-group">
				<label for="senha">Senha</label>
				<input type="password" name="senha" id="senha" class="form-control" placeholder="Crie uma senha">
			</div>

			<input type="submit" value="Cadastrar-se" class="btn btn-default">
		
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