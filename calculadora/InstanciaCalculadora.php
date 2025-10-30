<?php
    require_once 'Calculadora.php';

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        if(!empty($_POST['numero1']) && !empty($_POST['numero2']))
        {
        $calcula = new Calculadora($_POST['numero1'] , $_POST['numero2']);
        
            if(!empty($_POST['btnSoma']))
            {
                $calcula->somarNumeros();
            }
            else
            {
                if(!empty($_POST['btnSubtrair']))
                {
                $calcula->subtrairNumeros();
                }
                else{
                    if(!empty($_POST['btnMultiplicar']))
                    {
                    $calcula->multiplicarNumeros();
                    }
                    else
                    {
                        $calcula->dividirNumeros();
                    }
                }
            }
        }
    }
?>