<?php 
  class contaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    //metodos especiais
    public function contaBanco(){
      $this->saldo = 0;
      $this->status = true;
      echo "<p> Conta criada com sucesso </p>";
    }
    public function setnumConta($numConta){
      $this->numConta = $numConta;
    }
    public function getnumConta(){
      return $this->numConta;
    }
    public function setTipo($tipo){
      $this->tipo = $tipo;
    }
    public function getTipo(){
      return $this->tipo;
    }
    public function setDono($dono){
      $this->dono = $dono;
    }
    public function getDono(){
      return $this->dono;
    }
    public function setSaldo($saldo){
      $this->saldo = $saldo;
    }
    public function getSaldo(){
      return $this->saldo;
    }
    public function setStatus($status){
      $this->status = $status;
    }
    public function getStatus(){
      return $this->status;
    }


    public function abrirConta($t){
       $this->setTipo($t);
       $this->setStatus(true);
       if ($t == "CC"){ //conta corrente
        $this->saldo = 50;
       } elseif ($t == "CP") { //conta poupança
        $this->saldo = 150;
       } else ($this->saldo == 0); {
        $this->setStatus(false);
       }
    }
    public function fecharConta(){
        if ($this->saldo > 0){
        echo "<p>Essa conta ainda tem dinheiro, não posso fecha-la </p>";
        } elseif ($this->saldo < 0){
          echo "<p>Conta em Débito</p>";
        }
    }
    public function depositar($v){
        if ($this->getStatus()) {
          $this->setSaldo($this->getSaldo() + $v);
        }else ($this->status == false);{
          echo "<p>Conta fechada. Não consigo fazer o deposito</p>";
        }
    }
    public function sacar($v){
        if ($this->status == true) {
          if ($this->saldo >= $v) {
            $this->saldo = $this->saldo - $v;
            echo "<p> Saque de $v autorizado na conta de ". $this->getDono(). "</p>";
          } else {
            echo "<p>Saldo insuficiente para saque </p>";
          }
          } else {
            echo "<p> Não posso sacar de uma conta fechada </p>";
          }
        }
         
    public function pagarMensal() {
        if ($this->getTipo() == "CC") {
              $v = 12;
          } elseif ($this->getTipo() == "CP") {
              $v = 20;
          } else {
              echo "<p>Problema na conta</p>";
              return;
          }      
          if ($this->getStatus()) {
              if ($this->getSaldo() >= $v) { // Verifica se há saldo suficiente
                  $this->setSaldo($this->getSaldo() - $v);
                  echo "<p>Mensalidade de R$ $v cobrada com sucesso da conta de " . $this->getDono() . ".</p>";
              } else {
                  echo "<p>Saldo insuficiente para pagar a mensalidade.</p>";
              }
          } else {
              echo "<p>Problema na conta, não posso cobrar.</p>";
          }
      }
      
  }
?>