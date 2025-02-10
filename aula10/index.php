<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre>
    <?php
      require_once 'visitante.php';
      require_once 'aluno.php';
      require_once 'bolsista.php';
      
      $v1 = new Visitante("juvenal", 33, "M");
      print_r($v1);

      $a1 = new Aluno(true, "TI");
      $a1->setNome("Marcos ");
      $a1->pagarMensalidade();
      print_r($a1);

      $b1 = new Bolsista("Ligero", 20, "M", "Administração");
      $b1->pagarMensalidade();
      print_r($b1);
      

      
    ?>
  </pre>
</body>
</html>