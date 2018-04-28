<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Autenticando o Usuário</title>
	<script type="text/javascript">
		function loginsuccessfully() {
			setTimeout("window,location='pagina.php'",5000);
		}
		function loginfailed(){
			setTimeout("window,location='login.php'",5000);
		}
	</script>
</head>
<body>

<?php 
session_start();
include ("conexao.php");

$login = $_POST['login'];
$senha = $_POST['senha'];
$sql = mysqli_query($conn,"SELECT * FROM usuarios WHERE login = '$login' and senha = '$senha'");
$row = mysqli_fetch_array($sql);

if ($row > 0) {
	$_SESSION['login'] = $_POST['login'];
	$_SESSION['senha'] = $_POST['senha'];
	echo "Você foi Logado com sucesso! Aguarde um instante.";
	echo "<script>loginsuccessfully</script>";
	header('location:pagina.php');
}else{
	echo "<center>Nome de Usuário ou Senha incorreta!!</center>";
	echo "<script>loginfailed</script>";
}


?>
</body>
</html>