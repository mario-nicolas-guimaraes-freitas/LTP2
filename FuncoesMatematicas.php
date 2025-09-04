<?php
    $valor = 10;
    $valorSegundo = 2;
    $valorTerceiro = 3.4;


    echo nl2br("Primeiro valor: ".$valor.
    "\nSegundo valor: ".$valorSegundo.
    "\nTerceiro valor: ".$valorTerceiro.
    "\n\n");


    //arredondando valores:
    echo("Terceiro valor $valorTerceiro arredondado: ".
    round($valorTerceiro));//depende se for pra cima ou pra baixo


    echo nl2br("\nTerceiro valor $valorTerceiro arredondado pra baixo: ".
    floor($valorTerceiro)."\n");//sempre arredonda valor pra baixo

    echo("Terceiro valor $valorTerceiro arredondado pra cima: ".
    ceil($valorTerceiro));//sempre arredonda pra cima


    //potência
    echo nl2br("\n\nPrimeiro valor $valor elevado ao segundo número:".
    pow($valor, $valorSegundo)."\n\n"); //números elevados


    //raiz quadradas
    echo("a raiz quadrada de ".($valorQuarto = 100)." arredonado: ".
    sqrt($valorQuarto));

?>