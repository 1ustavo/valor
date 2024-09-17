<?php 
session_start();
    include 'header.php';
    if (!isset($_SESSION['admin'])){
        header('location:index.php');
    }
 ?>
    <!-- Começo main -->
    <main>
    <div class="blocos">
        <div class="bloco-info" style="background-color:#C70039 ;">
        <p class="bloco-text">CONTAS VENCIDAS</p>
        </div>
        <div class="bloco-info" style="background-color: #FFC300 ;">
        <p class="bloco-text" style="color: black;">PROXIMOS VENCIMENTOS</p>
        </div>
        <div class="bloco-info" style="background-color: #044ca7 ;">
        <p class="bloco-text">ULTIMOS PAGAMENTOS RECEBIDOS</p>  
        </div>
        <div class="bloco-info" id="bloco-infoM" style="background-color: #3fa704 ;">
        <p class="bloco-text">COFRE</p>
        </div>
    </div>
    </main>
    <!-- fim main -->
    <div class="relatorios-main">
    <div class="relatorios" style="background-color: #8dbdfb;">
        <p class="relatorios-text">MEDIA DE GASTOS / MES</p>

    </div>
    <div class="relatorios" style="background-color: #8dbdfb;">
        <p class="relatorios-text">MEDIA DE GASTOS / MES</p>

    </div>
    <div class="relatoriosM" style="background-color: #8dbdfb;">
        <p class="relatorios-text">MEDIA DE GASTOS / MES</p>

    </div>
    </div>  
    <?php 
        include 'footer.php';
     ?>