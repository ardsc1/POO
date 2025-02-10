<?php 
require_once 'animal.php';
  class Mamifero extends Animal {
    private $corPelo;

    public function locomover() {
        echo " Correndo";
    }

    public function alimentar() {
        echo " Mamando";
    }

    public function emitirSom() {
        echo " Som de mamífero";
    }

    // Getter e Setter para corPelo
    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }
}
?>