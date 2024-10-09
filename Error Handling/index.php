<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Error Handling</title>
</head>
<body>
  <?php
    // Introducción Error Handling
    // El error handling se puede hacer tan simple como esto
    try {
      echo "hola";
    } catch (Exception $e) {
      echo $e;
    }

    // Al utilizar bloques try catch en un entorno con espacio de nombres, es importante
    // escapar al espacio de nombres global, porque las excepciones son clases y la
    // clase de excepción existe en el espacio de nombres global. Esto se puede hacer utilizando
    // una barra invertida inicial para capturar la excepción.
    try {
      echo "adios";
    } catch (\Exception $e) {
      echo $e;
    }
    // excepciones personalizadas
    class MiExcepcion extends Exception {}

    try{
      $condicion = true;

      if ($condicion) {
        throw new MiExcepcion('Ha ocurrido un error');
      }
    } catch (MiExcepcion $e) {
      echo $e;
    }

  ?>
</body>
</html>
