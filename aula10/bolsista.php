<?php

require_once 'pessoa.php';
  class Bolsista extends pessoa {
      private $bolsa;
  
      public function __construct($nome, $idade, $sexo, $bolsa) {
          parent::__construct($nome, $idade, $sexo);
          $this->bolsa = $bolsa;
      }
  
      public function renovarBolsa() {
          
      }
  
      // Sobrescrevendo o método pagarMensalidade
      public function pagarMensalidade() {
        echo "<p> $this->nome é bolsista! Então paga com desconto ";
      }
  
      // Métodos GET e SET para bolsa
      public function getBolsa() {
          return $this->bolsa;
      }
  
      public function setBolsa($bolsa) {
          $this->bolsa = $bolsa;
      }
  }
  
?>
