<?php 
require_once 'animal.php';
 class Reptil extends Animal {
  private $corEscama;

  public function locomover() {
      echo " Rastejando";
  }

  public function alimentar() {
      echo " Comendo vegetais";
  }

  public function emitirSom() {
      echo " rastejando";
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