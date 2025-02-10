<?php 
require_once 'pessoa.php';
  class Gafanhoto extends Pessoa {
    private $login;
    private $totAssistido;

    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }

    public function viuMaisUm() {
        $this->totAssistido++;
        $this->ganharExp(1);
        echo "{$this->nome} assistiu a mais um vídeo. Total: {$this->totAssistido}\n";
    }

    // Getters e Setters
    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getTotAssistido() {
        return $this->totAssistido;
    }

    public function setTotAssistido($totAssistido) {
        $this->totAssistido = $totAssistido;
    }
}

?>