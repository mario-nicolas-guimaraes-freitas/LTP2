<?php
    require_once 'produtoDTO.php';

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        if(!empty($_POST['btnCadastro']))
        {
            $produtoDTO = new PeodutoDTO();

            $produtoDTO->__setNome($_POST['nome']);
            $valor->__setValor($_POST['valor']);
            $quantidade-> __setQuantidade($_POST['quantidade']);
            $descricao->__setDescricao($_POST['descricao']);
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <nav>
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="cadastro.php">Cadastrar</a></li>
        <li><a href="consulta.php">Consultar</a></li>
        </ul>
    </nav>

</body>
</html>