<?php

    if(!(empty($_POST(senha))))
    {
        $senha = $_POST['senha'];
        echo nl2br("A sua senha é:".$senha);
    }

?>









<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa</title>
</head>
<body>
    <form>
        <input type="number" type="password" name="senha" placeholder="Digite sua senha">
    </form>
</body>
</html>
