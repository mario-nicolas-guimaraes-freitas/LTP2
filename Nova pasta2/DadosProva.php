<?php

    //RESPOSTA DO SISTEMA

    $name = $_POST['name'];
    $number = $_POST['number'];
    $brinquedo = ['Peteca', 'Pião', 'Bolinhas de gude', 'Pipa', 'Boneca', 'Carrinho'];

    $test = [];


    if( $_SERVER['REQUEST_METHOD'] == 'POST'){
        if((!empty($_POST['name'])) && (!empty($_POST['number'])) && (!empty($_POST['toy'])))
        {
            echo "Seu nome é: ".$_POST['name'];
            echo nl2br("\nSeu número é: ".$_POST['number']."\n");
            echo ("O(s) brinquedos(s) escolhido(s) foi(ram): ");
            foreach($_POST['toy'] as $item)
            {
                echo $item." ";
            }
        }
        else
        {
            echo "Preencha todos os formulários.";
        }
    }
?>

