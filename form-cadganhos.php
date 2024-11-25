<?php
        session_start();
        include 'header.php';
        if(!isset($_SESSION['logado'])){
            header('location:index.php');
        }
?>
<main style="background-color:#262626">
<div class="opcoes">

<form style="background-color: #c7cacb;" method="post" action="envia-pagamentos.php">
    <h1>Cadastre Suas Ganhos</h1>
        <select name="tipo" id="tipo">
            <option value="0">
                FIXO
            </option>
            <option value="1">
                COMISSÃO
            </option>
        </select>
        <input id="valor"type="text" placeholder="valor" name="valor">
    <input type="date" name="dia-pagamento">
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
