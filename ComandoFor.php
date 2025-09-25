<?php
    //$valor = $_POST['valor'];
    //$cont = 0;

    if(!(empty($_POST['valor'])) && !(empty($_POST['cont']))
    && (is_numeric($_POST['valor'])) && (is_numeric($_POST['cont'])) )
    {
        $valor = $_POST['valor'];
        for($cont = 0; $cont <= $_POST['cont']; $cont++)
        {
            echo nl2br($valor." + ".$cont." = ".($valor + $cont)."\n");
        }
    }
    elseif(!(empty($_POST['cont'])))
    {
        echo nl2br("[valor] não definido ou igual a zero. Substituindo por: 0.\n\n");
        $valor = 0;
        for($cont = 0; $cont <= $_POST['cont']; $cont++)
        {
            echo nl2br($valor." + ".$cont." = ".($valor + $cont)."\n");
        }
    }
    elseif(!(empty($_POST['valor'])))
    {
        echo nl2br("[cont] não definido ou igual a zero. Substituindo por: 10.\n\n");
        $cont = 10;
        $valor = $_POST['valor'];
        for($cont = 0; $cont <= 10; $cont++)
        {
            echo nl2br($valor." + ".$cont." = ".($valor + $cont)."\n");
        }
    }
    else
    {
        echo nl2br("[cont] e [valor] não definidos ou igual a zero. \nSubstituindo [valor] por: 0.
        Substituindo [cont] por: 10.");
        $cont = 10;
        $valor = 0;
        for($cont = 0; $cont <= 10; $cont++)
        {
            echo nl2br($valor." + ".$cont." = ".($valor + $cont)."\n");
        }
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" >
        <br><br><br>
        <input type="number" name="valor" placeholder="valor">

        <br><br>
        <input type="number" name="cont" placeholder="cont">

        <br>
        <input type="submit">

        <br><br><br><br><br><br><br><br><br>
        <p>Escrevendo senha em php: utilize no código [input type="password"]</p>
        <input type="password">
    </form>
</body>
</html>