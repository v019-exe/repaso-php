<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estructuras de control</title>
</head>
<body>
    <?php
      // Introducción a condicionales

      if (true) {
        print 'He sido imprimido xdd'; // Se imprime porque la condición es verdadera
      }

      if (false) {
        print 'No me imprimo ez'; // No se imprime porque la condición es falsa
      } else {
        print 'he sido imprimido xdd'; // Se imprime porque la condición anterior es falsa
      }

      if (false) {
        print 'No me imprimo ez'; // No se imprime
      } elseif (true) {
        print 'Me imprimo xdd'; // Se imprime porque la condición anterior es falsa y esta es verdadera
      }

      // Condiciones ternarias
      print (false ? 'No se imprime' : 'Se imprime'); // Imprime 'Se imprime' porque la condición es falsa

      // Acortado (operador de fusión)
      $x = false;
      print($x ?: 'Me imprimo xdd'); // Imprime 'Me imprimo xdd' porque $x es false

      // Null coalescing operator
      $a = null; // $a es null
      $b = 'Se imprime'; // $b tiene un valor

      echo $a ?? 'a no existe'; // Imprime 'a no existe' porque $a es null
      echo $b ?? 'b no existe'; // Imprime 'Se imprime' porque $b tiene un valor

      $x = 0; // Asigna 0 a $x
      if ($x === '0') {
        print 'No se imprime'; // No se imprime porque $x es un número y no una cadena
      } else if ($x == '1') {
        print 'No se imprime'; // No se imprime porque $x no es igual a 1
      } else {
        print 'Se imprime'; // Se imprime porque ninguna de las condiciones anteriores es verdadera
      }
      
      // Switch
      // Switch hace coerción de tipos

      // La coerción de tipos es el proceso automático por el cual un lenguaje de programación convierte un tipo de dato a otro, facilitando operaciones y comparaciones entre diferentes tipos

      switch ($x) {
        case '0':
          print('Switch hace coerción de tipos');
          break;
        case 'dos':
          print("Dos");
          break;
        case 'tres':
          print("Tres");
          break;
        default:
          print("algo");
      }

      // BUCLES

      $i = 0;
      // Mientras $i sea menor a 5 printea
      while ($i < 5) {
        echo $i++;
      } // printea "01234"

      

      $i = 0;
      do {
        echo $i++;
      } while ($i < 5); // Printea "01234"
      
      // Mientras x sea menor a 10 printea $x incrementando por 1
      for ($x = 0; $x < 10; $x++) {
        echo $x;
      } // => printea "0123456789"

      // BUCLES EN ARRAYS

      $ruedas = ['bicicleta' => 2, 'coches' => 4];

      foreach ($ruedas as $contador) {
        echo $contador;
      } // => 24

      // Puede iterar sobre las claves así como sobre los valores.
      foreach ($ruedas as $coche => $contador) {
        echo "Un $coche tiene $contador ruedas";
      }

      $i = 0;
      while ($i < 5) {
        if ($i === 3) {
          break; // Salir del bucle
        }
        echo $i++;
      } // => "012"

      $i = 0;
      for ($i = 0; $i < 5; $i++) {
        if ($i === 3) {
          continue; // Saltar iteración
        }
        echo $i;
      } // => 0124
      
    ?>

    <?php if ($x): ?>
        <!-- Esto se muestra si $x es verdadero (truthy) -->
        Esta es la parte que se muestra si la prueba es verdadera.
    <?php else: ?>
        <!-- Esto se muestra si $x es falso (falsy) -->
        Esta es la parte que se muestra en caso contrario.
    <?php endif; ?>

</body>
</html>
