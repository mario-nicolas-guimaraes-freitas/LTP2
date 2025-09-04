<?php
    $teste = 5;

    $nota = /*5;*/  $teste;
    $notaSegundo = /*5;*/   $teste;
    $notaTerceiro = /*5;*/  $teste;
    $notaQuarto = /*5;*/    $teste;

    $nome = "Matheus Alexandre";
    $falta = 20;

    $media = ($nota + $notaSegundo + $notaTerceiro + $notaQuarto)/4;

    echo nl2br("A média de notas do Aluno:\n");
    echo("Nome: $nome");
    echo nl2br("\nMédia: $media\n");
    echo("Faltas: $falta");



    if(($media >= 5) && ($falta <= 20)){$mensagem = "Aprovado.";}
    else if(($media >= 5) && ($falta > 20)){$mensagem = "Reprovado. Razão excesso de falta.";}
    else if((($media < 5) && ($media >= 2)) && ($falta <= 20)){$mensagem = "Recupração.";}
    else if((($media >= 2) && ($media < 5)) && ($falta > 20)){$mensagem = "Reprovado. Razão: Excesso de falta.";}
    else if(($media < 2 ) && ($falta > 20)){$mensagem = "Reprovado. Razão: Excesso de falta e nota baixa.";}
    else if(($media < 2) && ($falta <= 20)){$mensagem = "Reprovado. Razão: Nota baixa.";}

    echo nl2br("\n$mensagem");
    


?>