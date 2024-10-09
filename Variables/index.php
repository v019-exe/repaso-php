<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables</title>
</head>
<body>
  <?php
    // bools true o FALSE
    $booleano = true;
    $booleano = FALSE;

    // Floats

    $float = 1.234; // => Decimal
    $float = 1.2e3; // => Potencia
    $float = 7E-10; // => Notación en este caso es 7 x 10^-10


    // NÚMEROS

    $int1 = 12; // => 12
    $int2 = -12; // => -12
    $int3 = 012; // => 10 (12 en octal es 10)
    $int4 = 0x0F; // => 15 (Hexadecimal, F equivale a 15)
    $int5 = 0b11111111; // => 255 (Binario)

    // Borrar variables
    unset($int1);

    // Aritmética

    $suma = 1+1; // => 2
    $resta = 2-1; // => 1
    $multiplicacion = 2*2; // => 4
    $division = 2/1; // => 2

    // Aritmetica acortada;
    $numero = 0;
    $numero += 1; // Incrementa  $numero por 1
    echo $number++; // printa 1 (Incrementa después de la evaluación)
    echo ++$number; // printea 3 (Incrementa antes de evaluar)
    $numero /= $float; // Divide y asigna la división a $numero

  ?>

</body>
</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables</title>
</head>
<body>
  <?php
    // bools true o FALSE
    $booleano = true;
    $booleano = FALSE;

    // Floats

    $float = 1.234; // => Decimal
    $float = 1.2e3; // => Potencia
    $float = 7E-10; // => Notación en este caso es 7 x 10^-10


    // NÚMEROS

    $int1 = 12; // => 12
    $int2 = -12; // => -12
    $int3 = 012; // => 10 (12 en octal es 10)
    $int4 = 0x0F; // => 15 (Hexadecimal, F equivale a 15)
    $int5 = 0b11111111; // => 255 (Binario)

    // Borrar variables
    unset($int1);

    // Aritmética

    $suma = 1+1; // => 2
    $resta = 2-1; // => 1
    $multiplicacion = 2*2; // => 4
    $division = 2/1; // => 2

    // Aritmetica acortada;
    $numero = 0;
    $numero += 1; // Incrementa  $numero por 1
    echo $number++; // printa 1 (Incrementa después de la evaluación)
    echo ++$number; // printea 3 (Incrementa antes de evaluar)
    $numero /= $float; // Divide y asigna la división a $numero

  ?>

</body>
</html>
>>>>>>> 4fe9ebe2b19c6eb0bef3da95220172171dd5c644
