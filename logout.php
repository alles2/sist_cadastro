<?php

	include_once("conexao.php");

?>

<?php
	
	session_start();
	session_destroy();
	header("Location: index.php");

?>