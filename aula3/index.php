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
         require_once 'caneta.php';
      
        $c1 = new caneta("Bic", "Azul", 0.5);
        $c2 = new caneta("DKOAPS", "Preta", 0.7);
        
        print_r($c1);
        print_r($c2);
      ?>
    </pre>
</body>
</html>