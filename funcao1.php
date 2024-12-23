<?php
    function escola($array){
        asort($array);
        return $array;
    
    }

 print_r(escola(["gustavo" => "100","Lucas" => "90", "maic" => "89"]));


//faz uma que eu entro com um array de nomes e valores e ele me retorna o nome que tem o maior valor
//nome e numero
//pra voltar um nome comm maior valor