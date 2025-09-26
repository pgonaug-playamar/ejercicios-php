<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación 1 - Ejercicio 17 - División entera por Euclides</title>
</head>
<body>
    <h2>Cálculo de la división entera por el algoritmo de Euclides</h2>
    <?php
      $dividendo = 5;
      $divisor = 6;
      $cociente = 0;
      while ($dividendo >= $divisor){
        $dividendo -= $divisor;
        $cociente++;
      }
      echo "El cociente es: $cociente  y el resto $dividendo ";

    ?>
</body>
</html>