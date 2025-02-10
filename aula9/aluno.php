<?php
require_once 'pessoa.php';
class Aluno extends pessoa{
    private $matr;
    private $curso;

    // Construtor
    public function __construct($matr, $curso) {
        $this->matr = $matr;
        $this->curso = $curso;
    }


    public function getMatr() {
        return $this->matr;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatr($matr) {
        $this->matr = $matr;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }

    // Método para cancelar a matrícula
    public function cancelarMatr() {
        $this->matr = null;
    }
}

?>
