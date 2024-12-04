<?php

session_start();
   include 'conexao.php';
   include 'header.php';
   if(!isset($_SESSION['logado'])){
       header('location:index.php');
   }
   $id = $_GET['id'];
   $consulta = $con->query("SELECT * FROM valor_recebido WHERE id ='$id'");
   $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
?>
<main style="background-color:#262626">
   <div class="opcoes">

       <form style="background-color: #c7cacb;" method="post" action="alterar-pagamentos.php?id=<?php echo $id; ?>">
           <h1>Alterar Suas Contas</h1>
           <input type="text" name="tipo" value="<?php echo $exibe['tipo']; ?>">
           <input type="text" name="valor" value="<?php echo $exibe['valor']; ?>">
           <input type="date" name="data" value="<?php echo $exibe['data']; ?>">
           <div class="check">
           <label for="recorrente">É Recorrente?</label><input checked type="checkbox" name="recorrente">
           </div>
           <input type="submit" name="alterar" value="ALTERAR">
       </form>
   </div>
</main>


