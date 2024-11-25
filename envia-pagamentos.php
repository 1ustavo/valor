<?php
include 'conexao.php';
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
$datareceb = date('Y-m-d');
if($_POST['recorrente'] == 'on'){
    $recorrente = 1;
}else{
    $recorrente = 0;
}

try{
    $inserir = $con->query("INSERT INTO valor_recebido(tipo, valor, recorrente, data) VALUES('$tipo','$valor','$recorrente','$datareceb') ");
    header('location:sucesso.php');
}catch(PDOException $e){
    echo $e->getMessage();
}


?>