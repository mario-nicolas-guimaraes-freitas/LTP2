<?php
    echo("Resolva as funções a seguir: Utilize operadores de atribuição para resolver:");


    echo nl2br("\n\nPrimeiro Número = ".($valorPimriero = 20).
    "\nSegundo Número = " .($valorSegundo = 10)."\n\n");



    echo("Somando 5 Unidades da variável Primeiro Número: ".
    $valorPimriero += 5);

    echo nl2br("\nSubtraindo 2 Unidades da variável Segundo Número: ".
    $valorSegundo -= 2 ."\n");

    echo nl2br("\nMultiplicando a variável Primeiro Número por 5: ".
    $valorPimriero *= 5 );

    echo nl2br("\nDividindo Segundo Número por 4: ".
    $valorSegundo /= 4 ."\n");

    echo nl2br("\nO módulo de Primeiro Número pelo Segundo Número é: ".
    $valorPimriero %= $valorSegundo);



?>