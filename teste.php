<?php

	include_once("conexao.php");

?>

<html>
	<head>
		<title>Autentificação</title>
		<script type="text/javascript">
			function loginsuccesfully(){
				setTimeout("window.location = 'logado.php'");
			} //se login der certo, redireciona para logado

			function loginfail(){
				setTimeout("window.location = 'login.php'",3000);
			} //se login de erro, retorna para login
		</script>
	</head>

<body>
<?php
	
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$sql = mysql_query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

	$reg = mysql_num_rows($sql);

	if( $reg > 0){

		session_start(); //carregando os dados 
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['senha'] = $_POST['senha'];
	
	


		echo "<script>loginsuccesfully()</script>";
	}else{ //se não existir senha/email
		echo "Email e/ou senha incorretos, aguarde um momento....";
		echo "<script>loginfail()</script>";
	} 

?>
	</body>
</html> 
