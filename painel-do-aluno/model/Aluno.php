<?php
require 'Turma.php';

class Aluno{
    private $codAluno;
    private $nomeAluno;
    private $generoAluno;
    private $cpfAluno;
    private $codTurma;

    public function getCodAluno(){
        return $this->codAluno;
    }
    public function setCodAluno($codAluno){
        $this->codAluno = $codAluno;
    }
    public function getNomeAluno(){
        return $this->nomeAluno;
    }
    public function setNomeAluno($nomeAluno){
        $this->nomeAluno = $nomeAluno;
    }
    public function getGeneroAluno(){
        return $this->generoAluno;
    }
    public function setGeneroAluno($generoAluno){
        $this->generoAluno = $generoAluno;
    }
    public function getCpfAluno(){
        return $this->cpfAluno;
    }
    public function setCpfAluno($cpfAluno){
        $this->cpfAluno = $cpfAluno;
    }
    public function getCodTurma(){
        return $this->codTurma;
    }
    public function setCodTurma($codTurma){
        $this->codTurma = $codTurma;
    }
}
?>