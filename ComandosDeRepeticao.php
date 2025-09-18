<?php

    //$valor = $_GET['valor'];
    //$maximo = $_GET['maximo'];

    if(!empty($_GET['valor']) && !empty($_GET['maximo']))
    {
        $valor = $_GET['valor'];
        while ($valor <= $_GET['maximo'])
        {
        echo("$valor ");
        $valor++;
        }
    }

    else
    {
        if(!empty($_GET['maximo']))
        {
            echo("não inseiu valor. ");
        }
        elseif(!(empty($_GET['valor'])))
        {
            echo("não inseriu nada.");
        }


        if(!empty($_GET['valor']))
        {
            echo("não inseiu máximo. ");
        }
        elseif(!(empty($_GET['maximo'])))
        {
            echo("não inseriu nada.");
        }
    }

    $valor = 0;
    echo nl2br("\n\n\n\n\n\n\n\n\n\n\n\n");



    do
    {
    echo nl2br("$valor ");
    $valor++;
    }
    while($valor <=10);



    echo nl2br("\n\n\n");



    for($valor = 0; $valor <= $_GET['maximo']; $valor++)
    {
        echo("$valor ");
    }

?>