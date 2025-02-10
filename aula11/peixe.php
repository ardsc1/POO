<?php 
require_once 'animal.php';
  class Peixe extends Animal {
    private $corEscama;

    public function locomover() {
        echo " Nadando";
    }

    public function alimentar() {
        echo " Comendo substâncias";
    }

    public function emitirSom() {
        echo " Peixes não fazem som";
    }

    public function soltarBolha() {
        echo " Soltando bolha";
    }

    // Getter e Setter para corEscama
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
}
?>