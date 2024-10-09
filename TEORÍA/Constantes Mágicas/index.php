<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Constantes mágicas</title>
</head>
<body>
  <?php
    echo "El nombre de la clase actual es " . __CLASS__; // Obtener el nombre de la clase, tiene que ser usada dentro de una clase
    echo "El directorio actual es " . __DIR__; // Obtener el path completo de un directorio
      require __DIR__ . '/admin/login.php'; // Uso típico
    
    echo "El path del archivo es " . __FILE__; // Obtener path de un archivo
    echo "Nombre actual de la función " . __FUNCTION__; // Obtener el nombre de la función actual
    echo "Número de linea " . __LINE__; // Obtener número de la línea actual
    // Obtiene el nombre del método actual. Solo devuelve un valor cuando se utiliza dentro de una declaración de objeto o trait.
    echo "El método actual es " . __METHOD__;

    // Obtener el nombre del namespace actual
    echo "El namespace actual es " . __NAMESPACE__;
    
    // Obtiene el nombre del trait actual. Solo devuelve un valor cuando se utiliza dentro de una declaración de trait o de objeto

    echo "El trait actual es " . __TRAIT__;
  ?>

</body>
</html>
