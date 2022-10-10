<?php
    require_once 'model/Aluno.php';
    require_once 'model/Conexao.php';

    class AlunoDao{
        public static function cadastrar(Aluno $A){
            $conexao = Conexao::conectar();
            $prepareStatement = $conexao->prepare('INSERT INTO tbaluno(nomeAluno, generoAluno, cpfAluno,  codTurma) VALUES( ?, ?, ?, ?)');
            $prepareStatement->bindValue(1, $A->getNomeAluno());
            $prepareStatement->bindValue(2, $A->getGeneroAluno());
            $prepareStatement->bindValue(3, $A->getCpfAluno());
            $prepareStatement->bindValue(4, $A->getCodTurma());
            $prepareStatement->execute();
        }
        public static function procurarCPF(Aluno $A){
            $conexao = Conexao::conectar();
            $prepareStatement = $conexao->prepare('SELECT * FROM tbaluno WHERE cpfAluno LIKE ?');
            $prepareStatement->bindValue(1, $A->getCpfAluno());
            $prepareStatement->execute();
            $resultado = $prepareStatement->fetch(PDO::FETCH_ASSOC);
            if($resultado != null){
                return true;
            }
            
        }
    }

?>