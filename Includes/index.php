<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Includes</title>
</head>
<body>
  <?php
    // Inclusión de archivos

    include 'mi-archivo.php';
    // El código en mi-archivo.php ahora está disponible en el ámbito actual.
    // Si no se puede incluir el archivo (por ejemplo, no se encuentra el archivo), se emite una advertencia.

    include_once 'mi-archivo.php';

    // Si el código en mi-archivo.php se ha incluido en otro lugar, no se volverá a incluir. Esto evita errores de declaración de clases múltiples

    require 'mi-archivo.php';
    require_once 'mi-archivo.php';
    // La función es la misma que el include solo que si el archivo no se puede incluir dará error
  ?>
</body>
</html>
