<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Professores</title>
    </head>
    <body>
    <form action="cadastra-professor.php" method="post">
            <h2>Cadastro de Professores para vacinação</h2>
            <label>Nome:</label>
            <input type="text" name="textNome" id="textNome">
            <br>

            <label>CPF:</label>
            <input type="text" name="cpf" id="cpf">
            <br>

            <label>Data de Nascimento:</label>
            <input type="date" name="data" id="data">
            <br>

            <label>Selecione a Escola Sede:</label>
            <select name="escolaSede" id="escolaSede">
                <option value="1">ETEC Cidade Tiradentes</option>
                <option value="2">ETEC Itaquera II</option>
                <option value="3">ETEC Guaianazes</option>
            </select>
            <br>

            <input type="submit" value="Cadastrar">
        </form> 
    </body>
</html>