<?php

    //FORMULÁRIO

    require_once 'DadosProva.php'
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="DadosProva.php">
    <label>Digite um Nome</label>
        <input type="text" name="name">

        <br><br>
        <label>Informe um Número</label>
        <input type="text" name="number">

        <br><br>
        
        <?php foreach($brinquedo as $item) : ?> 
        <input type="checkbox" name="toy[]" value="<?php echo $item; ?>">
        <label> <?php echo $item; ?> <br></label>

        <?php endforeach; ?>


        <br><br>
        <input type="submit">
    </form>
</body>
</html>