<?php 

function numero($numero){
    $raiz = $numero * $numero;
    if($numero % 2 == 0 && $numero % $raiz == 0){
        echo 'não é primo';

    }else{
        echo 'é primo';
    }


}

numero(10);


//VERIFICAR SE O RESTO DA DIVISAO DELE É 0 POR /2 OU PELA RAIZ QUADRADA DELE MESMO// 