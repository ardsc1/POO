<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre>
    <?php
      require_once 'conta.php';

      $p1 = new contaBanco();
      $p2 = new contaBanco();
      
      $p1->abrirConta("CC");
      $p1->setDono("Jubileu");
      $p1->setnumConta(1111);
      $p1->setStatus(true);

      $p2->abrirConta("CP");
      $p2->setDono("Creusa");
      $p2->setnumConta(1112);
      $p2->setStatus(true);
      
      $p1->depositar(300);
      $p2->depositar(500);

      $p2->sacar(100);

      $p1->pagarMensal();
      $p2->pagarMensal();
      
    
      print_r($p1);
      print_r($p2);
    ?>
  </pre>
</body>
</html>