<?php
session_start();
include 'conexao.php';
$consulta = $con->query('SELECT * FROM user WHERE id = 1');
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
$usuario = $exibe['nome'];
$senha = $exibe['senha'];

// echo $_POST['login'];
// echo $_POST['senha'];

if ($usuario == $_POST['login'] && $senha == $_POST['senha']){
    $_SESSION['logado']=1;
    // $_SESSION['nome']=$usuario;
    // var_dump($_SESSION);
    header('location:home.php');
}
else {
header('location:index.php');
}