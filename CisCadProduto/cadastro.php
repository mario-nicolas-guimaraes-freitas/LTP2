<?php



?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CisCadProduto</title>
</head>
<body>

    <nav>
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="cadastro.php">Cadastrar</a></li>
        <li><a href="consulta.php">Consultar</a></li>
        </ul>
    </nav>

    <h1>Cadastro</h1>

    <form method="POST" action="cadastroControl.php">
        <label>Nome do produto: </label>
        <input type="text" name="nome">
        <br><br>

        <label>Valor: </label>
        <input type="text" name="valor">
        <br><br>

        <label>Quantidade: </label>
        <input type="number" name="quantidade">
        <br><br>

        <label>Descrição: </label>
        <input type="text" name="descricao">
        <br><br>

        <input type="submit" value="Cadastrar" name="btnCadastro">
    </form>
    
</body>
</html>