<?php
    $valor = 10;
    echo($valor);

    //forma anilhada

    echo nl2br("\n Forma aninhada do valor primário: ".
    $valor = ($segundoValor = 5) + 15 ."\n");


    echo nl2br("Primeiro Valor: $valor Segundo Valor: $segundoValor\n\n");


    //forma combinada

    echo("Forma combinada do valor secundáro: ".
    $segundoValor *= 4); //mesma coisa que [valor = valor * 4]


    //forma referência
    $segundoValor = 7;

    echo nl2br("\nValor primário influcenciado pela referência do segundo valor: ".
    $valor = &$segundoValor."\n"); //endereço de memória: sinal de [&] antes da variável

    echo nl2br("Valor do primeiro: ".$valor."\nValor do segundo: ".$segundoValor);


?>