<?php
/*
    $valor = $_GET['valor'];
    $cidade = $_GET['cidade'];
    echo $valor < 18 ? "Menor de idade." : "Maior de idade.";
    echo nl2br("\n\n");
    echo $cidade == "teste" ? "teste": "não identificado";
*/
    
    
    //echo nl2br(\n\n\n);
    $valor = $_GET['valor'];
    echo $valor < 18 ? "Menor de idade, mora em". $_GET['cidade'] : "Maior de idade, mora em ". $_GET['cidade'];
    //echo nl2br("\n\n");
    //echo $cidade == "teste" ? "teste": "não identificado";

?>