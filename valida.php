<?php
session_start();
$usuario = 'gusta';
$senha = 1234;

// echo $_POST['login'];
// echo $_POST['senha'];

if ($usuario == $_POST['login'] && $senha == $_POST['senha']){
    $_SESSION['admin']=1;
 header('location:home.php');
}
else {
header('location:index.php');
}