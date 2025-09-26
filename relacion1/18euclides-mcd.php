<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación 1 - Ejercicio 17 - División entera por Euclides</title>
</head>
<body>
    <h2>Cálculo del MCD de dos números naturales por el algoritmo de Euclides</h2>
    <?php
      $num1 = 11;
      $num2 = 3;
      
      while ($num1 != $num2){
        if ($num1 > $num2){
            $num1 -= $num2;
        } else
            $num2 -= $num1;

      }
      echo "El MCD es $num1";

    ?>
</body>
</html>