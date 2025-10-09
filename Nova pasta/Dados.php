<?php
    $variavel = ['PHP', 'THML', 'JAVASCRIPT', 'COBOL','JAVA'];

    if(!(empty($_POST['select'])))
    {
        echo "Opção marcada: ".$_POST['select'];
    }
    else
    {
        echo "Selecione uma opção.";
    }
?>