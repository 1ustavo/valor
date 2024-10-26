<?php
function precificarAplicacao($tipo, $funcionalidades, $tempoEstimado, $custoCasa) {
    $precoBase = 1000; // Preço inicial
    $fatoresTipo = [
        'site' => 1,
        'ecommerce' => 1.5,
        'sistema' => 2
    ];
    $fatorFuncionalidade = count($funcionalidades) * 200; // R$200 por funcionalidade

    $precoFinal = $precoBase * $fatoresTipo[$tipo] + $fatorFuncionalidade + ($tempoEstimado * 100) + $custoCasa;
    return $precoFinal;
}

// Exemplo de uso
$tipo = 'ecommerce';
$funcionalidades = ['carrinho', 'pagamento', 'usuário'];
$tempoEstimado = 30; // em horas
$custoCasa = 2000; // Custo extra para trabalhar em casa

$preco = precificarAplicacao($tipo, $funcionalidades, $tempoEstimado, $custoCasa);
echo "O preço estimado para a aplicação é: R$" . $preco;
?>
