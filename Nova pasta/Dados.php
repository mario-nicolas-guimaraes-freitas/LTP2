<?php
    $variavel = ['PHP', 'THML', 'JAVASCRIPT', 'COBOL','JAVA'];

    if($_SERVER['REQUEST_METHOD'] ==  'POST'){
        if(!(empty($_POST['select'])))
        {
            echo "Opção marcada: ".$_POST['select'];
        }
        else
        {
             echo "Selecione uma opção.";
        }
    }
    else
    {
        echo "clica no botão Enviar.";
    }
?>