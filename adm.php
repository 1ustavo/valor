<?php 
session_start();
    include 'header.php';
    if (!isset($_SESSION['logado'])){
        header('location:index.php');
    }
 ?>
    <main style="background-color:#262626">

        <div class="opcoes">

        <a class="cadastrar" href="form-cad.php">
            Cadastrar Ganhos
        </a>
        <a class="alterar" href="form-cad.php">
             Alterar / Excluir Ganhos
        </a>
           
        <a class="cadastrar" href="form-cad.php">
            Cadastrar Gastos
        </a>
        <a class="alterar" href="form-cad.php">
             Alterar / Excluir Gastos
        </a>
        
        </div>
     
    </main>

 <?php 
    include 'footer.php';
 ?>