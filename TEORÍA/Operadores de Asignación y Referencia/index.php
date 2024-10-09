<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores especiales</title>
</head>
<body>
  <?php
    $x = 1;
    $y = 2;
    $x = $y; // x contiene el valor de $y ahora
    $z = &$y; // Referencia

    // $z ahora contiene una referencia de $y
    // $z también cambiará el valorde $y, y viceversa
    // $x se mantendrá tal ycomo está con el valor original de $y

    echo $x; // => 2
    echo $z; // => 2
    $y = 0;
    echo $x; // => 2
    echo $z; // => 0

    // Vuelca el tipo y el valor de la variable a stdout
    var_dump($z);

    // Printea la variable en la salida stdout en formato legible para humanos xd
    print_r($array);
  ?>
</body>
</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores especiales</title>
</head>
<body>
  <?php
    $x = 1;
    $y = 2;
    $x = $y; // x contiene el valor de $y ahora
    $z = &$y; // Referencia

    // $z ahora contiene una referencia de $y
    // $z también cambiará el valorde $y, y viceversa
    // $x se mantendrá tal ycomo está con el valor original de $y

    echo $x; // => 2
    echo $z; // => 2
    $y = 0;
    echo $x; // => 2
    echo $z; // => 0

    // Vuelca el tipo y el valor de la variable a stdout
    var_dump($z);

    // Printea la variable en la salida stdout en formato legible para humanos xd
    print_r($array);
  ?>
</body>
</html>
>>>>>>> 4fe9ebe2b19c6eb0bef3da95220172171dd5c644
