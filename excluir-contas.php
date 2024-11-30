<?php
// excluir contas vencidas
session_start();
include  'conexao.php';
if(!isset($_SESSION['logado'])){
    header('location:index.php');
}
$id = $_GET['id'];

$excluir = $con->query("DELETE FROM contas WHERE id = '$id'");
header('location:lista-contas.php');
?>