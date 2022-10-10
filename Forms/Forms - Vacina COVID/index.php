<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro  de Vacinação </title>
    </head>
    <body>
    <form action="cadastra-vacina.php" method="post">
            <h2> Cadastro de Vacina - COVID </h2>
            <label>Nome:</label>
            <input type="text" name="textNome" id="textNome">
            <br>

            <label>CPF:</label>
            <input type="text" name="cpf" id="cpf">
            <br>

            <label>Data de Nascimento:</label>
            <input type="date" name="dataNasc" id="dataNasc">
            <br>
            
            <label>Data de Aplicação:</label>
            <input type="date" name="dataApli" id="dataApli">
            <br>

            <label> Dose: </label>
            <input type="radio" name="dose" id="dose" value="1"> 1° Dose
            <input type="radio" name="dose" id="dose" value="2"> 2° Dose
            <input type="radio" name="dose" id="dose" value="3"> 3° Dose
            <input type="radio" name="dose" id="dose" value="4"> 4° Dose
            <br>

            <label>Selecione a UBS de aplicação: </label>
            <select name="ubs" id="ubs">
                <option value="#">Selecione: </option>
                <option value="1"> UBS JD. Soares </option>
                <option value="2"> UBS Santo Agostinho III</option>
                <option value="3"> UBS Cidade Tiradentes II</option>
                <option value="4"> UBS Fazenda do Carmo</option>
            </select>
            <br>
            <input type="submit" value="Cadastrar">
        </form> 
    </body>
</html>