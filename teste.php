<?php
include 'conexao.php';

$consulta1 = $con->query("SELECT * FROM contas");
while($exibe = $consulta1->fetch(PDO::FETCH_ASSOC)){
//    var_dump($exibe);
echo $exibe ['nome'];
}

?>
