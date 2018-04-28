<?php 
session_start();
ob_start();
include_once("conexao.php");

//recebe os dados do formulário
$dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);
$name = $dados['name'];
$address = $dados['address'];
$lat = $dados['lat'];
$lng = $dados['lng'];
$type = $dados['type'];
//salva os dados do bd
$result_markers = "INSERT INTO markers(name,address,lat,lng,type) VALUES ('$name', '$address', '$lat', '$lng', '$type')";

$resultado_markers = mysqli_query($conn, $result_markers);

if ($resultado_markers) {
	echo "success<br>";
	header('location:index.php');
} else
	echo "fail<br>";

?>