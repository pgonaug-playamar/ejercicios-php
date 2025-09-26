<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación 1 - Ejercicio 13 - Factorial</title>
</head>
<body>
    <h2>Factorial de un número entero</h2>
    <?php
       $num = -20;
       if ($num < 0){
        echo "El factorial de $num no está definido, debe ser un número natural";
       } else {
         $factorial = 1;
         for ($i = $num; $i > 1; $i--) { 
           $factorial *= $i;
         }
         echo "El factorial de $num es: $factorial";
       }
    ?>

</body>
</html>