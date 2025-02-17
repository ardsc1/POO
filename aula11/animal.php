<?php 

  abstract class Animal {
    protected $peso;
    protected $idade;
    protected $membros;

    // Métodos abstratos
    abstract public function locomover();
    abstract public function alimentar();
    abstract public function emitirSom();

    // Getters e Setters
    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getMembros() {
        return $this->membros;
    }

    public function setMembros($membros) {
        $this->membros = $membros;
    }
}

?>