<?php

    $nomePessoa = "Caio"; //variável criada(variáveis são criadas com símbolo do dóllar)
    echo("Nome: $nomePessoa");  //Função que escreve coisas

    echo nl2br("\n ".strlen($nomePessoa)."\n ");//strlen: conta o número de carcteres que contém a variável
    //nl2br: serve para quebra de linhas(só funciona com \n)

    echo(strpos($nomePessoa, 'i')); //strpos: conta a posição da string

    echo nl2br("\n ".strtolower($nomePessoa)."\n "); //strtolower: transforma todas as letras em minúsculas

    echo(strtoupper($nomePessoa));//strtoupper: transforma todas as letras em maiúsculas

    echo nl2br("\n ".substr($nomePessoa, 2)."\n ");//escreve o nome da variável a partir de um determinado número de string

    echo(substr_count($nomePessoa, "a"));//conta o número de strings específicas em uma variável

    echo nl2br("\n ".trim($nomePessoa)); //???

?>