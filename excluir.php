<?php
// excluir pagamentos
session_start();
include  'conexao.php';
if(!isset($_SESSION['logado'])){
    header('location:index.php');
}
$id = $_GET['id'];

$excluir = $con->query("DELETE FROM valor_recebido WHERE id = '$id'");
header('location:lista-pag.php');
?>