<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Namespaces</title>
</head>
<body>
  <?php
    // Definición del namespace para Mi\Espacio
    namespace Mi\Espacio;

    // Definición de la clase MiClase dentro del namespace Mi\Espacio
    class MiClase
    {
    }

    // Crear una instancia de MiClase
    $clase1 = new MiClase(); // Instancia de Mi\Espacio\MiClase

    // Cambio a otro namespace
    namespace Mi\Otro\Espacio;

    // Importar MiClase del namespace Mi\Espacio
    use Mi\Espacio\MiClase;

    // Crear una instancia de MiClase (que es Mi\Espacio\MiClase)
    $clase2 = new MiClase(); // Instancia de Mi\Espacio\MiClase

    // También se puede usar un alias para el namespace
    use Mi\Espacio as OtroEspacio;

    // Crear una instancia de MiClase usando el alias
    $clase3 = new OtroEspacio\MiClase(); // Instancia de Mi\Espacio\MiClase

    // Imprimir los tipos de las instancias para verificación
    echo get_class($clase1) . "<br>"; // Imprime el nombre completo de la clase de $clase1
    echo get_class($clase2) . "<br>"; // Imprime el nombre completo de la clase de $clase2
    echo get_class($clase3) . "<br>"; // Imprime el nombre completo de la clase de $clase3

  ?>
    
</body>
</html>
