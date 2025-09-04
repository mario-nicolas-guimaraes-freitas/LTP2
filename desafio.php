<?php

    //desafio



    echo nl2br("Segue o texto de um ditado popular, faça a análise do texto com asfunções de string até aqui estudadas\n\n\n");

    $texto = "  De grão em grão, a galinha enche o papo  ";

    echo nl2br("$texto\n\n");

    echo("O texto contém ".strlen($texto)." Caracteres");

    echo nl2br("\nA palavra galinha começa na posição ".strpos($texto, "galinha")."\n");

    echo("O texto todo em letras minúsculas: ".strtolower($texto));

    echo nl2br("\nO texto todo em letras maiúsculas: ".strtoupper($texto)."\n");

    echo("Parte do texto: ".substr($texto, 5));

    echo nl2br("\nA palavra grão aparece ".substr_count($texto, "grão")." vezes\n");

    echo("O texto tem ".strlen(trim($texto))." caracteres sem os espaços finais e iniciais");


?>