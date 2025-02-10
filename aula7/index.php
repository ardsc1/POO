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
         require_once 'lutador.php';
         require_once 'luta.php';
         $lutador = array();
         $lutador [0]= new Lutador("Athos Ruah", "Brasil", 20, 86.0, 1.97, 34, 2, 1);
         $lutador[1]= new Lutador("Gilmar", "Alemão", 23, 87.4, 1.87, 12, 3, 1);
         $lutador[2]= new Lutador("Roberto", "Suriname", 24, 108, 1.78, 12, 4, 1);
         $lutador[3]= new Lutador("Litu", "Argelia", 34, 89, 1.68, 12, 9, 1);
         $lutador[4]= new Lutador("Gabriel", "Arzebaijao", 34, 89, 1.98, 22, 18, 1);
        
         
         $luta = new luta();
         $luta->marcarLuta($lutador[1], $lutador[2]);
         $luta->lutar();
         $lutador[1]->status();


         
     
     ?>
   </pre>
</body>
</html>