<?php 
require_once 'mamifero.php';
 class Cachorro extends Mamifero {
  public function locomover() {
      echo "Correndo rapidamente";
  }

  public function enterrarOsso() {
      echo "Enterrando osso";
  }

  public function abanarRabo() {
      echo "Abanando o rabo";
  }
}

?>