<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relación 1 - Ejercicio 10: Ecuación de 2º grado (1ª aproximación)</title>
  <link rel="shortcut icon" href="./logo-ies-playamar.png" type="image/x-icon">
</head>

<body>
  <h2>Ecuación de segundo grado</h2>
  <?php
  $a = 1;
  $b = -3;
  $c = 1;

  // formato de salida
  // se utiliza printf y una serie de formatos
  // al estilo C
  // https://www.w3schools.com/PhP/func_string_printf.asp


  $r = $b ** 2 - 4 * $a * $c;
  if ($r < 0) {
    echo "los resultados no son reales";
  } else {
    $x1 = (-$b + sqrt($r)) / 2;
    $x2 = (-$b - sqrt($r)) / 2;
    //echo "las raices son $x1 y $x2";  // así salen sin formato
    printf("Las raices son %.2f y %.2f", $x1, $x2);
  }

  // ATENCIÓN: este programa no tiene en cuenta el control de coeficientes 0 que dan problemas
  ?>
</body>

</html>