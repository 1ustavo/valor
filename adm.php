<?php 
session_start();
    include 'header.php';
    if (!isset($_SESSION['logado'])){
        header('location:index.php');
    }
 ?>
    <main style="background-color:#262626">

        <div class="opcoes">

        <a class="cadastrar" href="form-cadganhos.php">
            Cadastrar Pagamentos
        </a>
        <a class="alterar" href="lista-pag.php">
             Alterar / Excluir Pagamentos
        </a>
           
        <a class="cadastrar" href="form-cad.php">
            Cadastrar Contas
        </a>
        <a class="alterar" href="lista-contas.php">
             Alterar / Excluir Contas
        </a>
        
        </div>
     
    </main>

 <?php 
    include 'footer.php';
 ?>