<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   <?php 
       class Caneta{
         private $modelo;
         private $ponta;
         private $cor;
         private $tampada;

         public function __construct($m, $c, $p){ // no lugar de contruct pode colocar o nome da Class
               $this->modelo = $m;
               $this->cor = $c;
               $this->ponta = $p;
               $this->tampar();
         }

         public function tampar(){
          $this->tampada = true;
         }

         public function getModelo() {
            return $this->modelo;
         }
         public function setModelo($m) {
            $this->modelo = $m;
         }
         public function getPonta() {
          return $this->ponta;
         }
         public function setPonta($p){
          $this->ponta = $p ;
         }
       }
   ?>
</body>
</html>
</body>
</html>