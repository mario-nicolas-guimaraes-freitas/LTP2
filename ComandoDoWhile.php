<?php

    //como utilizar do while: do{comando}while(condição)

   
   
   
   
   
   
   
   
   
    //$valor = $_GET['valor'];

    if((!empty($_GET['valor']))&&(!empty($_GET['max'])))
    {
        $max = $_GET['max'];
        $valor = $_GET['valor'];
        do
        {
        echo(" ".$valor++);
        }
        while($valor <= $_GET['max']);
    }
    elseif(!empty($_GET['valor']))
    {
        echo nl2br("[max] não definido ou vazio. valor automaticamente valerá: 0.\n\n");
        $max = 10;
        $valor = $_GET['valor'];
        do
        {
        echo(" ".$valor++);
        }
        while($valor <= $max);
    }
    elseif(!empty($_GET['max']))
    {
        echo nl2br("[valor] não definido ou vazio. valor automaticamente valerá: 0.\n\n");
        $valor = 0;
        do
        {
        echo(" ".$valor++);
        }
        while($valor <= $_GET['max']);
    }
    else
    {
        echo nl2br("[valor] e [max] não definido ou vazio. valor automaticamente valerá: 0.
        [max] automaticamente valerá: 10.\n\n");
        $valor = 0;
        $max = 10;
        do
        {
            echo(" ".$valor++);
        }
        while($valor <= $max);
    }


    /*
    $valor = 1;
    echo nl2br("\n\n\n");

    do
    {
        echo(" ".$valor++);
    }
    while($valor <= $_GET['cont']);
    */

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
    <form>
        <label>Valor:</label>
        <br>
        <input type="text" name="valor" placeholder="valor">
        <br>
        <input type="submit" value="Enviar">
        <br><br>

        <label>Máximo: </label>
        <br>
        <input type="text" name="max" placeholder="max">
        <br>
        <input type="submit" value="Enviar">

    </form>

</body>
</html>