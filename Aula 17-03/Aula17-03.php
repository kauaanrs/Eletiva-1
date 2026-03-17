<?php
    $mapa1 = array('João', "Maria", 3);
    print_r($mapa1);
    echo "<p></p>";
    var_dump($mapa1);
    echo "<p>Valor da posição 2: ".$mapa1[2]."</p>";
    
    echo "<p></p>";

    $mapa2[1] = "Kauan";
    $mapa2[2] = "Vanessa";
    $mapa2[3] = "Clara";
    print_r($mapa2);

    $contatos["Vanessa"] = "123456";
    $contatos["José"] = "9109240";
    echo "<p></p>";
    print_r($contatos);

    foreach($contatos as $valor){
        echo "<p>Telefone: $valor </p>";
    }

    foreach($contatos as $chave => $valor){
        echo "<p>Telefone de $chave: $valor </p>";
    }

    unset($mapa1[2]);
    print_r($mapa1);

    //funções
    $quantidade = count($mapa2);
    echo "<p>Quantidade de elementos no mapa2: $quantidade </p>";
    asort($contatos); //ordenar pelo valor
    ksort($contatos); //ordenar pela chave 

    print_r($contatos);

