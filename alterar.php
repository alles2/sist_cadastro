<?php
	include_once("conexao.php");	
	session_start();
	$codigo = $_SESSION['codigo'];


	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

	$alt = mysql_query("alterar usuarios set nome='$nome', email = '$email', senha = '$senha' where codigo = '$codigo'");
	$rows = mysql_affected_rows($alt);
	if($rows >= 1){
		header("Location: logado.php");
	}

	

?>

