<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays</title>
</head>
<body>
  <?php
    // Esto funciona con todas las versiones de PHP

    $array1 = array('Uno' => 1, 'Dos' => 2, 'Tres' => 3);

    // Nueva sintaxis

    $array1 = ['Uno' => 1, 'Dos' => 2, 'Tres' => 3];

    echo $array1['Uno']; // => Printea 1

    $array1['Cuatro'] = 4; // => Añade un nuevo elemento al array

    // Listar literales implicitamente asignando claves númericas
    // Las listas empiezan desde 0, es decir que la primera clave sería 0, 1, 2, 3 etc
    $array = ['Uno', 'Dos', 'Tres'];
    echo $array[0]; // => "Uno"

    // Añadir elemento al final de una array
    $array[] = 'Cuatro';
    // o
    array_push($array, 'Cinco');

    // Eliminar elementos de una array

    unset($array[3]);

  ?>
</body>
</html>
