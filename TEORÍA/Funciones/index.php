<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funciones</title>
</head>
<body>
  <?php
    // Introducción a funciones

    function mifuncion () {
      return 'Hola'; // => devuelve Hola
    }

    echo mifuncion(); // => 'Hola'

    function añadir ($x, $y = 1) {
      $resultado = $x + $y;
      return $resultado;
    }

    echo añadir(10); // => 11
    echo añadir(10, 10); // => 20

    // las variables dentro de funciones no son accesibles

    // Funciones anonimas

    $anon = function ($x) {
      return $x + 1;
    }

    echo $anon(10); // => 11

    // Define una función llamada foo que acepta tres parámetros: $x, $y, y $z
    function foo($x, $y, $z) {
      // Imprime los valores de $x, $y y $z separados por guiones
      echo "$x - $y - $z";
    }

    // Las funciones pueden devolver funciones

    function funcion ($x, $y) {
      return function ($z) use ($x, $y) {
        foo($x, $y, $z);
      }
    }

    $func = funcion('A', 'B')
    $func('C'); // => "A - B - C"

    // puedes llamar funciones usando una string

    // Asigna el nombre de la función 'añadir' a la variable $nombre_func
    $nombre_func = 'añadir';

    // Llama a la función cuyo nombre está almacenado en $nombre_func con los argumentos 1 y 2
    // Esto imprimirá el resultado de la función 'añadir', que se espera que sea 3
    echo $nombre_func(1, 2); // => 3

    // Puedes obtener todos los parámetros pasados ​​a una función
    function parametros() {
      // Obtiene el número de argumentos pasados a la función
        $num_args = func_num_args();
    
        // Si hay más de 0 argumentos, imprime el primer argumento
        if ($num_args > 0) {
            echo func_get_arg(0) . ' | '; // Imprime el primer argumento seguido de ' | '
        }
    
        // Obtiene todos los argumentos en un array
        $array_args = func_get_args();
    
        // Itera sobre cada argumento y su índice
        foreach ($array_args as $args => $arg) {
            // Imprime el índice y el argumento correspondiente, separados por ' - '
            echo $args . ' - ' . $arg . ' | ';
        }
    }

    parametros('Hola', 'Mundo'); // Hola | 0 - Hola | 1 - Mundo

    function variable($palabra, ...$lista) {
      echo $palabra . " || ";
      foreach ($lista as $item) {
        echo $item . ' | ';
      }
    }

    variable("String", "Hola", "Mundo"); // => String | Hola | Mundo |
  ?>
</body>
</html>
