<?php 
   require_once 'caneta.php';

  class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar() {
      if ($this->tampada == true){
        echo "<p> Erro! Não posso rabiscar " . "<br>";
      }else{
        echo"<p> Estou rabiscando...</p>";
      }
    }

    private function tampar(){
        $this->tampada = true;
    }
    private function destampar(){
      $this->tampada = false;
    }
  }
?>

