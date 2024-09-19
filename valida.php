<?php
session_start();
$usuario = 'gusta';
$senha = 1234;

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