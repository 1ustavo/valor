<?php 
session_start();
    include 'conexao.php';
    include 'header.php';
    if (!isset($_SESSION['logado'])){
        header('location:index.php');
    }
 ?>
    <!-- Começo main -->
    <main>
    <div class="blocos">
        <div class="bloco-info" style="background-color:#C70039 ;">
        <div class="bloco-text">CONTAS VENCIDAS</div><br><br>
        

        <?php 
            $consulta = $con->query("SELECT * FROM contas");
            while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){?>
        
            <div class="contas"> <?php echo $exibe['nome'];?>-<?php echo $exibe['valor'];?>-<?php echo $exibe['vencimento'];?></div>
            <?php   };
        ?>
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