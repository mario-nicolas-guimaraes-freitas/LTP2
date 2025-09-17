<?php
    $data = 10;

    switch($data)
    {
        case ($data%7 == 1): echo("Dia $data, Domingo.");break;

        case ($data%7 == 2): echo("Dia $data, Segunda.");break;

        case ($data%7 == 3): echo("Dia $data, Terça.");break;

        case ($data%7 == 4): echo("Dia $data, Quarta.");break;

        case ($data%7 == 5): echo("Dia $data, Quinta.");break;

        case ($data%7 == 6): echo("Dia $data, Sexta.");break;

        case ($data%7 == 7): echo("Dia $data, Sábado.");break;

        default: echo("Dia $data, Um dia qualquer da semana ae...");
    }




?>