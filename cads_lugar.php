<?php 
session_start();
include_once("conexao.php");

?>
<!DOCTYPE html >
<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<title>Cadastrar Endereço</title>

</head>

<body>
	<a href="index.php">Voltar ao mapa</a>

	<form action="processa_cad.php" method="POST">
		<input type="text" name="name" placeholder="Nome">
		<input type="text" name="address" placeholder="Endereço">
		<input type="text" name="lat" placeholder="Latitude">
		<input type="text" name="lng" placeholder="Longitude">
		<input type="text" name="type" placeholder="Educação,Restaurante ...">
		<input type="submit" value="Cadastrar">
	</form>
</body>
</html>