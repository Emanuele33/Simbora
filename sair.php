<?php
session_start();    
unset(
    $_SESSION['usuarioNome'],
    $_SESSION['usuarioSenha']
);    
$_SESSION['logindeslogado'] = "Deslogado com sucesso";
header("Location: index.php");
?>