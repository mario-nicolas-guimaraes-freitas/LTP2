<?php
    $nome = ['Maria', 'Pedro', 'João', 'Ana', 'teste'];


    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(!(empty($_POST['itemStrg'])))
        {
         echo "Você selecionou: ".$_POST['itemStrg'];
        }
        else
        {
         echo("Selecione uma opção.");
        }
    }
    else
    {
        echo "Envie ym formulário.";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Simples</title>
</head>
<body>
    <form method="POST">
        
        <?php foreach($nome as $itemStrg) : ?>
            <input type="radio" name="itemStrg" value="<?php echo $itemStrg; ?>">
            <label> <?php echo $itemStrg; ?> </label>
            
       <?php endforeach; ?>

        <br>
        <input type="submit" value="Enviar" >
        




        <br><br><br><br><br>
        <input type="submit" value="Atualizar página" >
    </form>
</body>
</html>