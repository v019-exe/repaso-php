<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>String Format & Vars</title>
</head>
<body>
  <?php
    // Las strings deberían estar cerradas en comillas simples
    $comilla_simple = '$String' // => $String

    $comillas_dobles = "Esto es una $comilla_simple"; // => 'Estp es una $String'

    // Carácteres especiales, solo se pueden poner en comillas dobles ""

    $tabulacion = "Este string contiene un \t caracter";

    // Ejemplo sin comillas simples

    $sintab = 'Este string contiene un \t';

    // Cerrar variables en {}

    $numero = 10;
    $manzanas = "Tengo {$numero} manzanas para comer";
    $naranjas = "Tengo ${number} naranjas para comer";
    $dinero = "Tengo $${numero} en el banco";

    
  ?>
</body>
</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>String Format & Vars</title>
</head>
<body>
  <?php
    // Las strings deberían estar cerradas en comillas simples
    $comilla_simple = '$String' // => $String

    $comillas_dobles = "Esto es una $comilla_simple"; // => 'Estp es una $String'

    // Carácteres especiales, solo se pueden poner en comillas dobles ""

    $tabulacion = "Este string contiene un \t caracter";

    // Ejemplo sin comillas simples

    $sintab = 'Este string contiene un \t';

    // Cerrar variables en {}

    $numero = 10;
    $manzanas = "Tengo {$numero} manzanas para comer"; // => Tengo 10 manzanas para comer
    $naranjas = "Tengo ${numero} naranjas para comer"; // => Tengo 10 naranjas para comer
    $dinero = "Tengo $${numero} en el banco"; // => Tengo $10 en el banco

    
  ?>
</body>
</html>
>>>>>>> 4fe9ebe2b19c6eb0bef3da95220172171dd5c644
