<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lógica</title>
</head>
<body>
  <?php
    $a = 0;
    $b = '0';
    $c = '1':
    $d = '1';

    // assert lanza un warning si el argumento no es verdadero

    // Estas comparaciones siempre serán verdaderas, incluso si los tipos no son los mismos.

    assert($a == $b); // igual a
    assert($c != $a); // diferente de
    assert($c <> $a); // diferente de (otra forma de decirlo)
    assert($a < $c); // Verifica que $a es menor que $c
    assert($a > $c); // Verifica que $a es mayor que $c (esto debería fallar si la primera afirmación es verdadera)
    assert($a <= $b); // Verifica que $a es menor o igual que $b
    assert($a >= $d); // Verifica que $a es mayor o igual que $d

    // Lo siguiente solo será verdadero si los valores coinciden y son del mismo tipo

    assert($c === $d);
    assert($a !== $d);
    assert(1 === '1');
    assert(1 !== '1');

    $a = 100;  // Asigna 100 a $a
    $b = 1000; // Asigna 1000 a $b

    // Compara $a con $a, devuelve 0 porque son iguales
    echo $a <=> $a; // Salida: 0

    // Compara $a con $b, devuelve -1 porque $a es menor que $b
    echo $a <=> $b; // Salida: -1

    // Compara $b con $a, devuelve 1 porque $b es mayor que $a
    echo $b <=> $a; // Salida: 1


    // Las variables se pueden convertir entre tipos, dependiendo de su uso.
    $int = 1;
    echo $int + $int; // => 2

    $int = '1';
    echo $int + $int; // => 2

    $string = 'uno';
    echo $string + $string; // => 0

    // devuelve 0 por qué el operador + no puede convertir el string 'uno' a número

    // La conversión de tipos se puede utilizar para tratar una variable como otro tipo

    // 1 es true y 0 es false
    $booleano = (boolean) 1; // => true

    $cero = 0;
    $booleano = (boolean) $cero; // => false

    // También hay funciones dedicadas para convertir la mayoría de los tipos

    $int = 5;
    $string = strval($int); // convierte 5 a string

    $variable = null; // Null

  ?>
</body>
</html>
