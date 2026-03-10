<?php
    date_default_timezone_set('America/Sao_Paulo');
    $data = date("d/m/Y H:i:s");
    echo "<p>Data: $data</p>";


    $valor = 12435.8678;
    $valor_arredondado = round($valor);
    echo "<p>$valor_arredondado</p>";
    $valor_formatado = number_format($valor, 2, ",", ".");
    echo "<p>Valor sem formatação: $valor</p>";
    echo "<p>Valor formatado: $valor_formatado</p>";

    $exp = pow(3, 4);
    $raiz = sqrt(16);
    $aleatorio = rand(1, 100); //numero aleatorio dentro do intervalo apresentado 
    if(isset($nome)){
        echo "<p>Nome informado</p>";
    }
    else{
        echo "<p>Nome não informado</p>";
        die();  
    }

    if (is_float($valor)){
        echo "<p>É um número flutuante</p>";
    }


?>