<?php
session_start();
include 'header.php';
include 'conexao.php';
if(!isset($_SESSION['logado'])){
    header('location:index.php');
}
$id = $_GET['id'];
$nome = $_POST['nome-conta'];
$valor = $_POST['valor'];
$cadastro = $_POST['cadastro'];
$vencimento = $_POST['vencimento'];
if(isset($_POST['recorrente']) &&  $_POST['recorrente'] == 'on'){
    $recorrente = 1;
    }else{
        $recorrente = 0;
    }
try{
    $alterar = $con->query("UPDATE contas SET nome = '$nome', valor = '$valor', cadastro = '$cadastro', vencimento = '$vencimento', recorrente = '$recorrente' WHERE id = '$id' ");
    header('location:lista-contas.php');
}catch(
    PDOException $e){   
        echo $e->getMessage();

}
    