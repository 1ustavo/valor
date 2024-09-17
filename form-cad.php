<?php 
    include 'header.php';
 ?>

<main style="background-color:#262626">
    <div class="opcoes">

        <form style="background-color: #c7cacb;">
            <h1>Cadastre Suas Contas</h1>
            <input type="text" name="nome-conta" placeholder="Qual  conta?: ">
            <input type="text" name="valor" placeholder="Qual o valor?: ">
            <input type="date" name="vencimento">
            <div class="check">
            <label for="recorrente">É Recorrente?</label><input type="checkbox" name="recorrente">
            </div>
            <input type="submit" name="cadastrar" value="CADASTRAR">
        </form>
    </div>
</main>

 <?php 
    include 'footer.php';
 ?>