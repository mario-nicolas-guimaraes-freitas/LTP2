<?php
    require_once 'InstanciaCalculadora.php';
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Calculadora</h3>
    <form method="POST" action="InstanciaCalculadora.php">
        <input type="number" name="numero1" />
        <br/> <br/>
        <input type="number" name="numero2" />
        <br/> <br/>
        <input type="submit" value="+" name="btnSoma"/>
        <input type="submit" value="-" name="btnSubtrair"/>
        <input type="submit" value="x" name="btnMultiplicar"/>
        <input type="submit" value="÷" name="btnDividir"/>
    </form> 
</body>
</html>