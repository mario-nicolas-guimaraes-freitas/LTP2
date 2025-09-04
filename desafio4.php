<?php
    echo("Resolva o problema a seguir: Utilize a seguir os Operadores de Comparação ".
    "que foram até aqui estudados:");

    echo nl2br("\n\nPrimeiro Número = ".($valor = 5).
    "\nSegundo Número = ".($valorSegundo = 5).
    "\nTerceiro Número = ".($valorTerceiro = 10).
    "\nPrimeiro Nome = ".($nome = "Renata").
    "\nSegundo Nome = ".($nomeSegundo = "renata").
    "\nTerceiro nome: ".($nomeTerceiro = "Renata")."\n\n");


    echo("(O Primeiro Nome é diferente do Segundo nome)
    E (O Primeiro Número é igual ao Segundo Número) Resultado = ");
    var_dump(($nome != $nomeSegundo) && ($valor == $valorSegundo));

    echo nl2br("\n(O Primeiro Número é igual ao Segundo Número) E "
    ."(O Primeiro Nome é diferente do Terceiro nome) Resultado = ");
    var_dump(($valor == $valorSegundo) && ($nome != $nomeTerceiro));

    echo nl2br("\n(O Primeiro Número é maior que o Segundo Número) E "
    ."(O Primeiro Número é menor que o Terceiro Número) Resultado = ");
    var_dump(($valor > $valorSegundo) && ($valor < $valorTerceiro));

    echo nl2br("\n(O Primeiro Número é maior ou igual ao Terceiro Número) E "
    ."(O Terceiro Número é menor ou igual ao Segundo Número) Resultado = ");
    var_dump(($valor >= $valorTerceiro) && ($valorTerceiro <= $valorSegundo));



    echo nl2br("\n\n(O Primeiro Nome é diferente do Segundo nome)".
    "E (O Primeiro Número é igual ao Segundo Número) Resultado = ");
    var_dump(($nome != $nomeSegundo) || ($valor == $valorSegundo));

    echo nl2br("\n(O Primeiro Número é igual ao Segundo Número) E "
    ."(O Primeiro Nome é diferente do Terceiro nome) Resultado = ");
    var_dump(($valor == $valorSegundo) || ($nome != $nomeTerceiro));

    echo nl2br("\n(O Primeiro Número é maior que o Segundo Número) E "
    ."(O Primeiro Número é menor que o Terceiro Número) Resultado = ");
    var_dump(($valor > $valorSegundo) || ($valor < $valorTerceiro));

    echo nl2br("\n(O Primeiro Número é maior ou igual ao Terceiro Número) E "
    ."(O Terceiro Número é menor ou igual ao Segundo Número) Resultado = ");
    var_dump(($valor >= $valorTerceiro) || ($valorTerceiro <= $valorSegundo));



    echo nl2br("\n\n(O Primeiro Nome é diferente do Segundo nome)".
    "E (O Primeiro Número é igual ao Segundo Número) Resultado = ");
    var_dump(($nome != $nomeSegundo) xor ($valor == $valorSegundo));

    echo nl2br("\n(O Primeiro Número é igual ao Segundo Número) E "
    ."(O Primeiro Nome é diferente do Terceiro nome) Resultado = ");
    var_dump(($valor == $valorSegundo) xor ($nome != $nomeTerceiro));

    echo nl2br("\n(O Primeiro Número é maior que o Segundo Número)  E"
    ."(O Primeiro Número é menor que o Terceiro Número) Resultado = ");
    var_dump(($valor > $valorSegundo) xor ($valor < $valorTerceiro));

    echo nl2br("\n(O Primeiro Número é maior ou igual ao Terceiro Número) E "
    ."(O Terceiro Número é menor ou igual ao Segundo Número) Resultado = ");
    var_dump(($valor >= $valorTerceiro) xor ($valorTerceiro <= $valorSegundo));



    echo nl2br("\n\nA negação((O Primeiro Nome é diferente do Segundo Nome) E ".
    " (O Primeiro Número é igual ao Segundo Número) = ");
    var_dump(!(($nome != $nomeSegundo) && ($valor == $valorSegundo)));

    echo nl2br("\nA negação((O Primeiro Número é igual ao Segundo Número) E ".
    " (O Primeiro Nome é diferente do Segundo Nome) = ");
    var_dump(!(($valor == $valorSegundo) && ($nome == $valorSegundo)));
?>