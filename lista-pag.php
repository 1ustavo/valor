<?php
    session_start();
    include 'header.php';
    if(!isset($_SESSION['logado'])){
        header('location:index.php');
    }
?>
    <main style="background-color:#262626">
       <div class="tabela-pag">
        <div class="tabela-forma">
        <h1>TIPO</h1>
        <h1>VALOR</h1>
        <h1>DATA</h1>
        <h1>OPÇÕES</h1>
        </div>
        <div class="tabela-resultado">
                <h1>fixo</h1>
                <h1>100</h1>
                <h1>2024-11-25</h1>
           <div class="botao-tabela"><button style="background-color:orange; color: white;">ALTERAR</button>
            <button style="background-color:red; color: white;">EXCLUIR</button></div>

        </div>
       </div> 
        </main>
    <?php 
    include 'footer.php';
 ?>