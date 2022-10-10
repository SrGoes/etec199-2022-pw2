<?php 
    $nome = $_POST['textNome'];
    $cpf = $_POST['cpf'];
    $dataNascimento = $_POST['data'];
    $escolaSede = $_POST['escolaSede'];

    if($escolaSede == 1){
        $escolaSede = "ETEC Cidade Tiradentes";
    }else if($escolaSede == 2){
        $escolaSede = "ETEC Itaquera II";
    }else{
        $escolaSede = "ETEC Guaianazes";
    }

    echo("O professor ".$nome.", inscrito no CPF ".$cpf. ", foi cadastrado para vacinação no dia ".$dataNascimento. " e na instituição ".$escolaSede." . ");
?>