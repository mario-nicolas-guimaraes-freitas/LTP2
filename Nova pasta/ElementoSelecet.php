<?php
    //include: roda a script com outro arquivo(opcional)
    //require: roda a script com outro arquivo(obrigatório)

    require_once 'Dados.php';
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
    <br><br>

    <form method="POST" action="Dados.php">


        <select name="select">

        <?php foreach($variavel as $code){ ?>
            <option value="<?php echo $code; ?>">
                <?php echo $code; ?> 
            </option>
        <?php } ?>

        </select>


        <br><br>
        <input type="submit">
    </form>
</body>
</html>