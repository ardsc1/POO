<?php
require_once 'pessoa.php';
class Funcionario extends pessoa{
    private $setor;
    private $trabalhando;

    // Construtor
    public function __construct($setor, $trabalhando) {
        $this->setor = $setor;
        $this->trabalhando = $trabalhando;
    }

    // Métodos GET
    public function getSetor() {
        return $this->setor;
    }

    public function getTrabalhando() {
        return $this->trabalhando;
    }

    // Métodos SET
    public function setSetor($setor) {
        $this->setor = $setor;
    }

    public function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
    }

    // Método para mudar o setor de trabalho
    public function mudarTrabalho($novoSetor) {
        $this->setor = $novoSetor;
        $this->trabalhando = true;
        echo "Agora o funcionário trabalha no setor de " . $this->setor . ".<br>";
    }
}

?>
