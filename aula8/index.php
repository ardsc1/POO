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
      require_once 'pessoa.php';
      require_once 'livro.php';
      $p[0]= new pessoa("Joel", 19, "masculino");
      $p[1]= new pessoa("Maria", 56, "feminino");
      $l[0]= new Livro(" PHP BASICO", "jOSE MARIA", 205, $p[0]);
      
      $l[0]->abrir();
      $l[0]->folhear(80);
      $l[0]->avancarPag();
      $l[0]->detalhes();
    ?>
  </pre>
</body>
</html>