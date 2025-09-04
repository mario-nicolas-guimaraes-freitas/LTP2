<?php
    echo nl2br("Desenvolva a atividade a seguir: os seis dados(valores) logo abaixo".
    "são variáveis, portanto dinâmico".
    "\n\nPrimeiro Nome = ".($nome = "Ana Paula").
    "\nSegundo Nome = ".($nomeSegundo = "Ana Luiza Moura").
    "\nTerceiro Nome = ".($nomeTerceiro = "José Carlos").

    "\n\nPrimeiro Número = ".($valor = "80").
    "\nSegundo Número = ".($valorSegundo = "80").
    "\nTerceiro Número = ".($valorTerceiro = "150.15").

    "\n\nO valor da variável Primeiro Nome é: $nome".
    "\nO valor da variável Terceiro Nome é: $nomeTerceiro".
    "\n$nome e $nomeTerceiro são casados possem um filha: $nomeSegundo".
    "\n$nomeSegundo é estudante e ganha uma bolsa de: R$ $valorTerceiro Por mês ".
    "equivalente à ".($valorTerceiro * 12)." Anual".
    "\nO Nome $nomeSegundo possui ".(strlen($nomeSegundo))." caracteres ".
    "e o sobrenome é: ".(substr($nomeSegundo, 10)).
    "\nIncrementando uma unidade(Pós incremento) à variável Primeiro Número: ".($valor++).
    "\nNovo valor da variável Primeiro Número : $valor".
    "\nA raiz quadrada da variável Primeiro Número é: ".(sqrt($valor)).
    "\nO valor $valor  == Valor $valorSegundo: ");
    var_dump($valor == $valorSegundo);
    
    echo nl2br("\nO valor $valorSegundo <= Valor $valor: ");
    var_dump($valorSegundo <= $valor);

    echo nl2br("\n$valor >= $valorSegundo xor $valor != $valorSegundo  ");
    var_dump(($valor >= $valorSegundo) xor ($valor != $valorSegundo));

    echo nl2br("\n$valor == $valorSegundo xor $valor != $valorSegundo  ");
    var_dump(($valor == $valorSegundo) xor ($valor != $valorSegundo));
?>