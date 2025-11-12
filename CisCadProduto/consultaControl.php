<?php

    require_once 'produtoDAO.php';
    require_once 'conexao.php';
    require_once 'produtoDTO.php';

    $produtoDAO = new produtoDAO($conexao);
    $produtoDTO = new produtoDTO();
    $produtoDAO->consultaDadosProduto($produtoDTO);
?>