<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Traits</title>
</head>
<body>
  <?php
    /*
    Un trait en PHP es un mecanismo de reutilización de código que permite incluir métodos en múltiples clases 
    sin usar la herencia. Son útiles para compartir funcionalidades entre clases que no están en la misma 
    jerarquía de herencia, promoviendo así la composición en lugar de la herencia. Se definen con la palabra 
    clave 'trait' y se utilizan dentro de las clases con 'use'.
    */

    // Definición del trait con un método
    trait MiTrait
    {
      public function miMetodoTrait()
      {
        print 'Tengo MiTrait'; // Método que imprime un mensaje
      }
    }

    // Clase que utiliza el trait
    class MiClaseTrait
    {
      use MiTrait; // Incluye los métodos del trait
    }

    // Inicializa una instancia de MiClaseTrait
    $init = new MiClaseTrait();
    $init->miMetodoTrait(); // => Imprime 'Tengo MiTrait'

    /*
    También puedes combinar múltiples traits en una sola clase. 
    Esto permite incluir varios conjuntos de métodos en una clase sin herencia.
    */

    trait OtroTrait
    {
      public function otroMetodoTrait()
      {
        print 'Tengo OtroTrait';
      }
    }

    class MiClaseCompuesta
    {
      use MiTrait, OtroTrait; // Usa dos traits
    }

    // Inicializa una instancia de MiClaseCompuesta
    $compuesta = new MiClaseCompuesta();
    $compuesta->miMetodoTrait(); // => Imprime 'Tengo MiTrait'
    $compuesta->otroMetodoTrait(); // => Imprime 'Tengo OtroTrait'

    /*
    Los traits también pueden contener propiedades y métodos estáticos, 
    y se pueden modificar en las clases que los utilizan.
    */
    
    trait TraitConPropiedad
    {
      public $propiedadTrait = 'Propiedad de Trait';

      public function mostrarPropiedad()
      {
        print $this->propiedadTrait; // Imprime el valor de la propiedad
      }
    }

    class ClaseConPropiedad
    {
      use TraitConPropiedad;
    }

    $objeto = new ClaseConPropiedad();
    echo $objeto->propiedadTrait; // => Imprime 'Propiedad de Trait'
    $objeto->mostrarPropiedad(); // => Imprime 'Propiedad de Trait'

  ?>
</body>
</html>
