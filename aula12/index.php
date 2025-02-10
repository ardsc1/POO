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
    require_once 'video.php';
    require_once 'gafanhotos.php';
    require_once 'visualisacao.php';

     $v[0]= new video("Aula 1 de POO");
     $v[1]= new video("Aula 12 de PHP");
     $v[2]= new video("Aula 15 de HTML5");
     $g[0] = new Gafanhoto("Athos", 20, "M", "athos1");
     $g[1] = new Gafanhoto("Creusa", 29, "F", "creusa23");
     $vis[0] = new Visualizacao($g[1], $v[1]);
     $vis[1] = new Visualizacao($g[1], $v[2]);

     $vis[0]->avaliar(5);
     print_r($vis);
     print_r($v);
     print_r($g);
    ?>
  </pre>
</body>
</html>