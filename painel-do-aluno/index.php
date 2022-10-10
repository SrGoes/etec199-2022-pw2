<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Portal do Aluno</title>
    </head>

    <body>
        <div class="container">
            <div class="form-image">
                <img src="assets/img/img_index.svg" alt="">
            </div>
            <div class="form">
                    <div class="form-header">
                        <div class="title">
                            <h1>Portal do Aluno</h1>
                        </div>
                    </div>
                <form action="formTurma.php" method="post">
                    <div class="continue-button">
                        <button type="submit"><a>Cadastrar Turma</a></button>
                    </div>
                </form>
                <form action="formAluno.php" method="post">
                    <div class="continue-button">
                        <button type="submit"><a>Cadastrar Aluno</a></button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>