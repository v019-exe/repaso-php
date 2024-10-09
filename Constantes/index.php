<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Constantes</title>
</head>
<body>
  <?php
    // Las constantes se definen con define();
    // No se pueden cambiar mientras se ejecuta;

    define("FOO", "Hola");

    echo FOO; // => Hola

    echo "Esto muestra: " . FOO; // => Esto muestra: Hola

  ?>
</body>
</html>
