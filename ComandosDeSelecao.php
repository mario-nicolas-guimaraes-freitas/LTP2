<?php
    $valor = $_GET['valor']; 
    /*isso define que o usuário escolha o valor das variáveis pelo site usando
    "?variável = valor" na url do site  */

    switch($valor)             
    {
        case 0: echo("escolheu 0.");break;
        case 1: echo("escolheu 1.");break;
        case 2: echo("escolheu 2.");break;
        case ($valor > 5): echo("a"); break;
        default: echo("Valor indefinido.");
    }

    /*
    echo nl2br("\n\n");
    var_dump($_GET);
    */



?>