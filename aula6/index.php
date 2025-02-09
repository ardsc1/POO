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
         require_once 'ufc.php';
         $lutador = array();
         $lutador [0]= new Lutador("Athos Ruah", "Brasil", 20, 86.0, 1.97, 34, 2, 1);
         $lutador[1]= new Lutador("Gilmar", "Alemão", 23, 87.4, 1.87, 12, 3, 1);
         $lutador[0]->status();
         $lutador[0]->apresentar();
         $lutador[0]->perderLuta();
         $lutador[0]->status();
         

         
     
     ?>
   </pre>
</body>
</html>