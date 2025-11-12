<?php
    $dsn = "mysql:host=localhost;dbname=turmak2";
    $usuario="root";
    $senha = "";

    try{
        $conexao = new PDO($dsn, $usuario, $senha);
        echo "Conectado ao banco de dados com sucesso.";
    }catch(PDOException $erro){

        echo "Erro de conexão.".$erro->getMessage();
    }

?>