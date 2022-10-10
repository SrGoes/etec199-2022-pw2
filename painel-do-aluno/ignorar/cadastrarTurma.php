<?php
require_once 'model/Turma.php';
require_once 'dao/TurmaDao.php';

    //Criando objetos
        $turma = new Turma();
        $turmaDao = new TurmaDao();

        $turma->setNomeTurma($_POST['nomeTurma']);

    //Verificando se foi digitado o nome ou o id de uma turma existente
        if($turmaDao->procurarNome($turma) == true){
            echo 'Turma já cadastrada!<br>';
        } else {
            $turmaDao->cadastrar($turma);
            echo 'Turma cadastrada com sucesso!<br>';
        }
?>