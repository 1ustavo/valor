<?php 
    include('conexao.php');
    include('header.php');
if(!isset($_SESSION['logado'])){
    header('location:index.php');
}
$id = $_GET['id'];
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
$data = $_POST['data'];
if(isset($_POST['recorrente']) && $_POST['recorrente'] == 'on'){
    $recorrente = 1;
}else{
    $recorrente = 0;
}
try{
    $alterar = $con->query("UPDATE valor_recebido SET tipo = '$tipo', valor = '$valor', data = '$data', recorrente = '$recorrente' WHERE id = '$id'");
    header('location:lista-pag.php');
}catch(PDOException $e){  
    echo $e->getMessage();

}