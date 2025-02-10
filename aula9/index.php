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
      require_once 'pessoa.php';
      require_once 'aluno.php';
      require_once 'professor.php';
      require_once 'funcionario.php';

      $p1 = new Pessoa("Pedro", 19, "masculino");
      $p2 = new Aluno("Osmar", 16, "maculino", true, "TI");
      $p3 = new Professor("Matemática", 3400);
      $p4 = new Funcionario("RH", true);
      
      $p3->setNome("Josimar");
      $p2->setCurso("Informatica");
      $p3->receberAum(550);
      

      print_r($p1);
      print_r($p2);
      print_r($p3);
      print_r($p4);
    ?>
  </pre>
</body>
</html>