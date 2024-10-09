<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    // Definición de la clase MiClase
    class MiClase
    {
      // Definición de una constante de clase
      const mi_constante = 'valor';
      
      // Definición de una variable estática
      static $variableEstatica = 'estatica';
      
      // Variables estáticas con diferentes niveles de visibilidad
      public static $variableEstaticaPublica = 'estatica publica'; // Accesible desde cualquier parte
      private static $privada = 'privada'; // Solo accesible dentro de la clase
      protected static $protegida = 'protegida'; // Accesible en la clase y sus subclases

      // Propiedades de instancia con diferentes niveles de visibilidad
      public $propiedad = 'publica'; // Accesible desde cualquier parte
      public $instancia; // Se inicializa en el constructor
      protected $prot = 'protegida'; // Accesible en la clase y sus subclases
      private $priv = 'privada'; // Solo accesible dentro de la clase

      // Constructor de la clase, que inicializa la propiedad $instancia
      public function __construct($instancia)
      {
        $this->instancia = $instancia; // Asigna el valor pasado al constructor a la propiedad
      }

      // Método público que imprime un mensaje
      public function miMetodo()
      {
        print 'Mi clase'; // Imprime 'Mi clase'
      }

      // Método final que no puede ser sobreescrito en subclases
      final function nopuedessobreescribir()
      {
        // No contiene implementación
      }

      // Método mágico que convierte la clase en una cadena
      public function __toString()
      {
        return $this->propiedad; // Devuelve el valor de la propiedad
      }

      // Destructor que se llama cuando se destruye el objeto
      public function __destruct()
      {
        print "Destruyendo"; // Imprime un mensaje al destruir el objeto
      }

      // Método estático que puede ser llamado sin instanciar la clase
      public static function miMetodoEstatico()
      {
        print 'Soy un método estático'; // Imprime un mensaje
      }
    }

    // Uso de la clase
    echo MiClase::mi_constante; // Imprime el valor de la constante
    echo MiClase::$variableEstatica; // Imprime el valor de la variable estática

    // Inicializa una instancia de MiClase
    $mi_clase = new MiClase('Instancia');

    // Imprime la propiedad de instancia
    echo $mi_clase->propiedad; // Imprime 'publica'
    echo $mi_clase->instancia; // Imprime 'Instancia'
    $mi_clase->miMetodo(); // Llama al método de instancia y imprime 'Mi clase'

    // Llama al método estático
    MiClase::miMetodoEstatico(); // Imprime 'Soy un método estático'

    // Intenta acceder a una propiedad llamada 'invalid_property' en la instancia $mi_clase
    // Esto generará un aviso (notice) si la propiedad no está definida
    echo $mi_clase->invalid_property; // => Dará error

    // Utiliza el operador de acceso seguro (?.) para acceder a 'invalid_property'
    echo $mi_clase ?->invalid_property; // No generará error, imprimirá null

    // Usando el operador de fusión de null (??) para imprimir 'publica' si la propiedad no existe
    echo $mi_clase ?->invalid_property ?? "publica"; // Imprime 'publica'

    // Definición de una subclase que extiende MiClase
    class miSegundaClase extends MiClase
    {
      // Método que accede a la propiedad protegida
      function propiedad_protegida()
      {
        echo $this->prot; // Imprime el valor de la propiedad protegida
      }

      // Sobreescribe el método miMetodo
      function miMetodo(){
        parent::miMetodo(); // Llama al método de la clase padre
        print ' > miSegundaClase'; // Imprime un mensaje adicional
      }
    }

    // Inicializa una instancia de miSegundaClase
    $miSegundaClase = new miSegundaClase("Instancia");
    $miSegundaClase->propiedad_protegida(); // Imprime 'protegida'
    $miSegundaClase->miMetodo(); // Imprime 'Mi clase > miSegundaClase'

    // Clase final que no se puede extender
    final class noExtensible
    {
      // No contiene métodos ni propiedades
    }

    // Clase que utiliza métodos mágicos para crear métodos getter y setter
    class miClaseMapa
    {
      private $propiedad; // Propiedad privada

      // Método mágico que se llama al intentar acceder a una propiedad no accesible
      public function __get($clave) {
        return $this->$clave; // Devuelve el valor de la propiedad
      }

      // Método mágico que se llama al intentar asignar un valor a una propiedad no accesible
      public function __set($clave, $valor)
      {
        $this->$clave = $valor; // Asigna el valor a la propiedad
      }
    }

    // Inicializa una instancia de miClaseMapa
    $x = new miClaseMapa();
    echo $x->propiedad; // Usará el __get() para acceder a 'propiedad', pero será null
    $x->propiedad = 'Algo'; // Usará el __set() para asignar 'Algo' a 'propiedad'

    // Una interfaz en PHP define métodos que una clase debe implementar, sin proporcionar la implementación misma
    interface InterfazUno
    {
      public function HacerAlgo(); // Método que debe implementarse
    }

    interface InterfazDos
    {
      public function hacerAlgoDiferente(); // Método que debe implementarse
    }

    // Interfaz que extiende a InterfazDos, añadiendo un nuevo método
    interface InterfazTres extends InterfazDos
    {
      public function hacerOtraCosa(); // Método que debe implementarse
    }

    // Clase abstracta que implementa InterfazUno
    abstract class MiClaseAbstracta implements InterfazUno
    {
      public $x = 'hacerAlgo'; // Propiedad pública
    }

    // Clase concreta que extiende MiClaseAbstracta y también implementa InterfazDos
    class MiClaseConcreta extends MiClaseAbstracta implements InterfazDos
    {
      // Implementa el método de InterfazUno
      public function hacerAlgo()
      {
        echo $x; // Imprime el valor de $x
      }

      // Implementa el método de InterfazDos
      public function hacerAlgoDiferente()
      {
        echo 'hacerAlgoDiferente'; // Imprime un mensaje
      }
    }

    // Clase que implementa múltiples interfaces
    class OtraClase implements InterfazUno, InterfazDos
    {
      // Implementa el método de InterfazUno
      public function hacerAlgo()
      {
        echo 'Hacer algo'; // Imprime un mensaje
      }

      // Implementa el método de InterfazDos
      public function hacerAlgoDiferente() {
        echo 'Hacer algo diferente'; // Imprime un mensaje
      }
    }
  ?>
</body>
</html>
