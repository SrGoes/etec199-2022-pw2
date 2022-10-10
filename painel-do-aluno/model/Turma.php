<?php
class Turma{
    private $codTurma = 0;
    private $nomeTurma = 'nulo';

    public function getCodTurma(){
        return $this->codTurma;
    }
    public function setCodTurma($codTurma){
        $this->codTurma = $codTurma;
    }
    public function getNomeTurma(){
        return $this->nomeTurma;
    }
    public function setNomeTurma($nomeTurma){
        $this->nomeTurma = $nomeTurma;
    }
}
?>