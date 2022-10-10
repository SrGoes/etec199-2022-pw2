<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Cadastro de Aluno</title>
    </head>

    <body>
        <div class="container">
            <div class="form-image">
                <img src="assets/img/img_aluno.svg" alt="">
            </div>
            <div class="form">
                <form action="index.php" method="post">
                    <div class="form-header">
                        <div class="title">
                            <h1>Cadastre-se</h1>
                        </div>
                        <div class="login-button">
                            <button><a href="index.php">Voltar</a></button>
                        </div>
                    </div>
                </form>
                <form action="index-resultadoA.php" method="post">
                    <div class="input-group">
                        <div class="input-box">
                            <label for="nomenomeAluno">Nome</label>
                            <input id="nomeAluno" type="text" name="nomeAluno" placeholder="Digite seu nome" required>
                        </div>
                        <div class="input-box">
                            <label for="cpfAluno">CPF</label>
                            <input id="cpfAluno" type="text" name="cpfAluno" placeholder="xxx.xxx.xxx-xx" required>
                        </div>
                        <div class="input-box">
                            <label for="codTurma">Id Turma</label>
                            <input id="codTurma" type="number" name="codTurma" placeholder="Digite o codigo da turma">
                        </div>
                        <div class="input-box">
                            <label for="nomeTurma">Nome Turma</label>
                            <input id="nomeTurma" type="text" name="nomeTurma" placeholder="Digite a turma">
                        </div>
                    </div>

                    <div class="gender-inputs">
                        <div class="gender-title">
                            <h6>Gênero</h6>
                        </div>
                        <div class="gender-group">
                            <div class="gender-input">
                                <input type="radio" name="generoAluno" id="feminino" value="F" required>
                                <label for="feminino">Feminino</label>
                            </div>
                            <div class="gender-input">
                                <input type="radio" name="generoAluno" id="masculino" value="M">
                                <label for="masculino">Masculino</label>
                            </div>
                        </div>
                    </div>
                    <div class="continue-button">
                        <button type="submit"><a>Cadastrar</a></button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>