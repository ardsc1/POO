<?php
 abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;

    // Construtor
    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    // Métodos GET
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    // Métodos SET
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setIdade($idade) {
        if ($idade >= 0) { // Evita idade negativa
            $this->idade = $idade;
        }
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    // Método para fazer aniversário (incrementa a idade)
    public function fazerAniver() {
        $this->idade++;
    }
}

?>
