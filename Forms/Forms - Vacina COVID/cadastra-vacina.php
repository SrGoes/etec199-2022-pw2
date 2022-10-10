<?php 
    $nome = $_POST['textNome'];
    $cpf = $_POST['cpf'];
    $dataNascimento = $_POST['dataNasc'];
    $dataApli = $_POST['dataApli'];
    $dose = $_POST['dose'];
    $ubs = $_POST['ubs'];

   
    if($ubs == 1){
        $ubs = "UBS 259 - Jd. Soares";
    }else if($ubs == 2){
        $ubs = "UBS 120- Santo Agostinho III";
    }else if($ubs == 3){
        $ubs = "UBS 103 - Cidade Tiradentes II";
    }else{
        $ubs = "UBS 254 - Fazenda do Carmo";
    }

    echo("<h2>Comprovante de Vacinação</h2> <br>");
    echo("".$ubs . "<br> Foi regristrada a aplicação da ".$dose. "° dose para o paciente sr(a) ".$nome.".");
    echo("<br> São Paulo ".$dataApli ."<br>");
    
?>

<html>
    <body>
        <a href="index.php">Registrar outro paciente</a>
    </body>
</html>

