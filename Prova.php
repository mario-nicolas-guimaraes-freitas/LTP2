<?php
//QUESTÃO 1
    echo nl2br("Primeira avaliação LTP2 - PHP: Questão 1 - Desenvolva a Atividade a seguir\n\nPrimeiro Número: ".
    ($valor = 10)."\nSegundo Número: ".($valorSegundo = 150.00)."\nTerceiro Número: ".($valorTerceiro = 25).
    "\nPrimeiro Nome: ".($nome = "José fábio")."\nSegundo Nome: ".($nomeSegundo = "Ana Bianca").
    "\nTerceiro Nome: ".($nomeTerceiro = "Fabrício Silva")."\n\n$nome e $nomeTerceiro são casados e ".
    "$nomeSegundo é o único filho(a) do casal.\nA média dos números ($valor e $valorTerceiro)/2 é ".
    (($valor + $valorTerceiro)/2)."\n$nomeSegundo é estudante de medicina e gasta semestralmente R$900.00 com o curso");




?>


<?php
//QUESTÃO 2
    echo nl2br("\n\n\n\n\n\n");

    echo nl2br("Primeira avaliação LTP2 - PHP: Questão 2 - Desenvolva a Questão a seguir: 
    Primeiro Nome: ".($nome = "Hugo mota")."\nSegundo Nome: ".($nomeSegundo = "Mônica Silva")."\n\nPriemriro Número: ".
    ($valor = 16)."\nSegundo Número: ".($valorSegundo = 125.25)."\nTerceiro Número: ".($valorTerceiro = 2).
    "\nQuarto Número: ".($valorQuarto = 4)."\n\nQuarto Número >= Terceiro Número: ");
    var_dump($valorQuarto >= $valorTerceiro);

    echo nl2br("\nSegundo Número == Primeiro Número: ");
    var_dump($valorSegundo == $valor);

    echo nl2br("\nA raiz quadrada do Primeiro Número($valor): = ".(sqrt($valor)).
    "\nO Primeiro Número ($valor) elevado ao terceiro Número ($valorTerceiro) = ".(pow($valor,$valorTerceiro)).
    "\nArredondando o Segundo Número($valorSegundo) = ".(floor($valorSegundo))."\nO Segundo Nome: $nomeSegundo possui ".
    (strlen($nomeSegundo))." caracteres"."\nPrimeiro Nome: $nome com todos os caracteres minúculos = ".(strtolower($nome)).
    "\nPrimeiro Nome == Segundo nome = ");
    var_dump($nome == $nomeSegundo);

    echo nl2br("\nPrimeiro Número($valor) multiplicado pelo Terceiro Número($valorTerceiro) = ".($valor * $valorTerceiro).
    "\nO resto da divisão de(".($valor * $valorTerceiro).") pelo Quarto Número ($valorQuarto) = ".
    (($valor * $valorTerceiro)%$valorQuarto));
?>