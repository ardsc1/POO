<?php 
require_once 'mamifero.php';
  class Canguru extends Mamifero {
    public function locomover() {
        echo "Saltando";
    }

    public function usarBolsa() {
        echo "Usando a bolsa";
    }
}
?>