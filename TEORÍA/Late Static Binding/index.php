<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    // Late Static Binding permite que los métodos estáticos referencien la clase que los llama en lugar de la clase en la que están definidos, usando la palabra clave `static`.
    class ParentClase
    {
      public static function quien()
      {
        echo "Yo soy " . __CLASS__ . "\n"; // Imprime el nombre de la clase actual
      }

      public static function prueba()
      {
        // self hace referencia a la clase donde está definido el método
        self::quien();
        // static hace referencia a la clase desde la que se invoca el método
        static::quien();
      }
    }

    ParentClase::prueba();
    /*
    Salida:
    Yo soy ParentClase
    Yo soy ParentClase
    */

    class ChildClase extends ParentClase
    {
      public static function quien()
      {
        echo "Pero estoy en " . __CLASS__ . "\n"; // Imprime el nombre de la clase actual
      }
    }

    ChildClase::prueba();
    /*
    Salida:
    Yo soy ParentClase
    Pero estoy en ChildClase
    */
  ?>
</body>
</html>
