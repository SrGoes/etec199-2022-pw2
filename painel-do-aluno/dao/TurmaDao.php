<?php
    require_once 'model/Turma.php';
    require_once 'model/Conexao.php';

    class TurmaDao{
        public static function cadastrar(Turma $Turma){
            $conexao = Conexao::conectar();

            $prepareStatement = $conexao->prepare('INSERT INTO tbturma(nomeTurma) VALUES(?)');
            
            $prepareStatement->bindValue(1, $Turma->getNomeTurma());

            $prepareStatement->execute();
        }

        public static function procurarCodigo(Turma $Turma){
            $conexao = Conexao::conectar();

            $prepareStatement = $conexao->prepare('SELECT * FROM tbturma WHERE codTurma = ?');
            
            $prepareStatement->bindValue(1, $Turma->getCodTurma());

            $prepareStatement->execute();

            $resultado = $prepareStatement->fetch(PDO::FETCH_ASSOC);
            if($resultado != null){
                return true;
            }
        }

        public static function procurarNome(Turma $Turma){
            $conexao = Conexao::conectar();

            $prepareStatement = $conexao->prepare('SELECT * FROM tbturma WHERE nomeTurma = ?');
            
            $prepareStatement->bindValue(1, $Turma->getNomeTurma());

            $prepareStatement->execute();

            $resultado = $prepareStatement->fetch(PDO::FETCH_ASSOC);
            if($resultado != null){
                return true;
            }
        }

        public static function pegarNome(Turma $Turma){
            $conexao = Conexao::conectar();

            $prepareStatement = $conexao->prepare('SELECT nomeTurma FROM tbturma WHERE codTurma = ?');
            
            $prepareStatement->bindValue(1, $Turma->getCodTurma());

            $prepareStatement->execute();

            $resultado = $prepareStatement->fetch(PDO::FETCH_ASSOC);
            if($resultado != null){
                return $resultado['nomeTurma'];
            }
        }

        public static function pegarCodigo(Turma $Turma){
            $conexao = Conexao::conectar();

            $prepareStatement = $conexao->prepare('SELECT codTurma FROM tbturma WHERE nomeTurma = ?');
            
            $prepareStatement->bindValue(1, $Turma->getNomeTurma());

            $prepareStatement->execute();

            $resultado = $prepareStatement->fetch(PDO::FETCH_ASSOC);
            if($resultado != null){
                return $resultado['codTurma'];
            }
        }
    }
?>