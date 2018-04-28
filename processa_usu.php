<?php 
include 'conexao.php';


$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuarios(nome,sobrenome,login,senha) VALUES ('$nome','$sobrenome','$login','$senha')";
$insert_member_res = mysqli_query($conn,$sql);
if (mysqli_affected_rows($conn)>0) {
	echo "<p>Cadastro Registrado!</p>";
}

?>

<a href="index.php">Voltar ao mapa</a>