<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Resultado</title>
    </head>

    <body>
        <div class="container">
            <div class="form-image">
                <img src="assets/img/img_index.svg" alt="">
            </div>
            <div class="form">
                <form action="index.php" method="post">
                    <div class="form-header">
                        <div class="title">
                            <h1>Resultado</h1>
                        </div>
                        <div class="login-button">
                            <button type="submit">Voltar</button>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="input-box">
                        <?php
                        require_once 'model/Turma.php';
                        require_once 'dao/TurmaDao.php';

                            //Criando objetos
                                $turma = new Turma();
                                $turmaDao = new TurmaDao();

                                $turma->setNomeTurma($_POST['nomeTurma']);

                            //Verificando se foi digitado o nome ou o id de uma turma existente
                                if($turmaDao->procurarNome($turma) == true){
                                    echo '<h2>Erro ao cadastrar Turma!</h2><br><h5>Já existe uma turma com esse nome<br></h5>';
                                } else {
                                    $turmaDao->cadastrar($turma);
                                    echo '<h2>Turma cadastrada com sucesso!</h2>';
                                }
                        ?>
                        </div>
                </form>
            </div>
        </div>
    </body>
</html>