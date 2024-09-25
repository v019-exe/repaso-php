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
  ?>
</body>
</html>
