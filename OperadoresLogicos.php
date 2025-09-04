<?php
    //&& ou "and" -> sinal de união(E)

    //|| ou "or" -> sinal de "ou"

    //xor -> "ou um, ou outro"

    //! -> negação

    $valor = true;
    $valorSegundo = false;

    echo nl2br("Primeiro valor:");
    var_dump($valor == true);


    echo nl2br("\nSegundo valor: ");
    var_dump($valorSegundo == true);


    echo nl2br("\n\nPrimeiro valor e segundo valor: ");
    var_dump($valor && $valorSegundo);


    echo nl2br("\nPrimeiro valor e segundo valor: ");
    var_dump($valor || $valorSegundo);

    
    echo nl2br("\nOu o Primeiro valor, ou o segundo valor: ");
    var_dump($valor xor $valorSegundo);


    echo nl2br("\n\nNão primeiro valor: ");
    var_dump(!$valor);


    echo nl2br("\nNão segundoo valor: ");
    var_dump(!$valorSegundo);

?>