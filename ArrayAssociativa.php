<?php
    $userBox =[
        'Data de criação' => 1991,
        'Nome' => "teste",
        'Descrição' => "Este usuário é um clinte",
        'Compra total' => 509.45,
        'Classe' => "Cliente"
    ];



/*  foreach($userBox as $data => $dataInf)
    {
        echo nl2br("A [".$data.'] do usuário é "'.$dataInf.'"'."\n");
    }   */

    //$data = $_POST['data'];
    //echo "Dado selecionado: ".$_POST['data'];
    //foreach($data as $dataInf)
    //{
    //    echo "$dataInf, ";
    //}

    if(!(empty($_POST['data'])))
    {
        foreach($data as $dataInf)
        {
            echo "Você selecionou: ".$_POST['data'];
        }
    }
    else
    {
        echo "sem data";
    }

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArraysAssociativas</title>
</head>
<body>
    <br><br><br><br>
    <form /*action="POST"*/>



    <?php foreach($userBox as $data => $dataInf) : ?> 

    <input type="checkbox" name="<?php echo $data; ?>" value="<?php echo $dataInf; ?>">
    <label> <?php echo $data; ?> </label>

    <?php endforeach; ?>



    <br>
    <input type="submit" value="Ok" >
    </form>
</body>
</html>