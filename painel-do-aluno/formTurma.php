<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Cadastro da Turma</title>
    </head>

    <body>
        <div class="container">
            <div class="form-image">
                <img src="assets/img/img_turma.svg" alt="">
            </div>
            <div class="form">
                <form action="index.php" method="post">
                    <div class="form-header">
                        <div class="title">
                            <h1>Cadastre a Turma</h1>
                        </div>
                        <div class="login-button">
                            <button type="submit"><a href="index.php">Voltar</a></button>
                        </div>
                    </div>
                </form>
                <form action="index-resultadoT.php" method="post">
                    <div class="input-group">
                        <div class="input-box">
                            <label for="nomeTurma">Nome Turma</label>
                            <input type="text" name="nomeTurma" id="nomeTurma" placeholder="Digite o nome da nova turma" required>
                        </div>

                    <div class="continue-button">
                        <button type="submit"><a>Cadastrar</a></button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>