<?php
    session_start();
    include 'header.php';
    include 'conexao.php';
    if(!isset($_SESSION['logado'])){
        header('location:index.php');
    }
?>
    <main style="background-color:#262626">
        <table>
            <!-- tabela -->
            <thead>
                <!-- tr = table row = linha da tabela -->
                <tr> 
                    <!-- th = table header = celulas de cabeçalhos -->
                    <th>TIPO</th>
                    <th>VALOR</th>
                    <th>DATA</th>
                    <th>OPÇÕES</th>
                </tr>
            </thead>
                <tbody>
                    <!-- corpo da tabela -->
                <?php
                $consulta = $con->query("SELECT * FROM valor_recebido");
                while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){?>
                    <tr>
                        <!-- table data = dados -->
                        <td><?php echo $exibe['tipo'];?></td>
                        <td><?php echo $exibe['valor'];?></td>
                        <td><?php echo $exibe['data'];?></td>
                        <td>
                            <div class="botoes"><a class="botao botaovermelho" href="form-alterar.php?id=<?php echo $exibe['id'];?>">ALTERAR</a>
                            <a class="botao botaolaranja" href="excluir.php?=<?php echo $exibe['id'];?>">EXCLUIR</a>
                            </div>
                        </td>
                        
                        
                    </tr>
                    <?php }; ?>
                </tbody>
        </table>


       <!-- <div class="tabela-pag">
        <div class="tabela-forma">
        <h1>TIPO</h1>
        <h1>VALOR</h1>
        <h1>DATA</h1>
        <h1>OPÇÕES</h1>
        </div>
        <div class="tabela-resultado">
                <h1>FIXO</h1>
                <h1>100</h1>
                <h1>2024-11-25</h1>
           <div class="botao-tabela"><button style="background-color:orange; color: white;">ALTERAR</button>
            <button style="background-color:red; color: white;">EXCLUIR</button></div>

        </div>
       </div>  -->
        </main>
    <?php 
    include 'footer.php';
 ?>