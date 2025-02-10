<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 
    <?php 
      require 'mamifero.php';
      require_once 'reptil.php';
      require_once 'peixe.php';
      require_once 'ave.php';
      require_once 'canguru.php';
      require_once 'cachorro.php';
      require_once 'tartaruga.php';
      require_once 'goldfish.php';
      require_once 'arara.php';
      require_once 'cobra.php';
      

      $m= new Mamifero();
      $a = new Ave();
      $r = new Reptil();
      $c = new Canguru();
      $k = new Cachorro();
      $t = new Tartaruga();
      $co = new Cobra();

      $r->locomover();
      $co->locomover();
      $t->locomover();

    ?>
 
</body>
</html>