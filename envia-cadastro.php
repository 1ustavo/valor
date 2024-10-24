<?php
    include 'conexao.php';
$nome = $_POST['nome-conta'];
$valor = $_POST['valor'];
$datacad = date('Y-m-d');
$vencimento = $_POST['vencimento'];
if($_POST['recorrente'] == 'on'){
$recorrente = 1;
}else{
    $recorrente = 0;
}
try{
    $inserir = $con->query("INSERT INTO contas(nome, valor, cadastro, vencimento, recorrente) VALUES('$nome','$valor','$datacad','$vencimento','$recorrente') ");
    header('location:sucesso.php');
 }catch(PDOException $e){
    echo $e->getMessage();
}