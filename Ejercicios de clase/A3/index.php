<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <?php
    // Array asociativa
    /**
     * @var array $trabajadores
     * Array asociativa con 6 claves (DNI) y 6 valores (nombres de trabajadores) asignados
     */

     // Ejercicio 1
    $trabajadores = [
        "12345678B" => "Juan",
        "12356765C" => "Pedro",
        "45354366B" => "Carlos",
        "78787899A" => "Marcos",
        "1111111A" => "Juanito",
        "3333333C" => "Federico de los palotes"
    ];
    // Ejercicio 2
    echo "<ul>";
    foreach ($trabajadores as $clave => $valor) { // Itera sobre cada trabajador, usando su DNI como clave y su nombre como valor
        echo "<li>$clave: $valor</li>"; // Muestra la clave (DNI) y el valor (nombre) en una lista desordenada
    }
    echo "</ul>";
    // Ejercicio 3 (array_push no funciona con asociativas, habría que usar merge)
    // Añadimos un nuevo elemento dentro del array asociativo
    $trabajadores["00098556R"] = "Pepito";

    // Usando array_merge
    $trabajadores_merge = [
    "12345678B" => "Juan",
    "12356765C" => "Pedro",
    "45354366B" => "Carlos",
    "78787899A" => "Marcos",
    "1111111A" => "Juanito",
    "3333333C" => "Federico de los palotes"
    ];

    $nuevos = array("00098556R" => "Pepito");

    // Fusionamos los arrays
    $trabajadores1 = array_merge($trabajadores_merge, $nuevos);

    echo "Trabajadores usando merge <br>";
    // Imprimimos el array combinado
    print_r($trabajadores1);
    echo "<br>";
    // Elimina el último elemento del array
    array_pop($trabajadores); 

    print_r($trabajadores); // Imprime el contenido actual del array

    echo "<hr>";
    echo "<br>";

    // Array de prueba
    $array_prueba = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10); // Array normal de números del 1 al 10
    print_r($array_prueba); // Imprime el contenido del array

    // Añade valores al final del array
    array_push($array_prueba, 11); 
    array_push($array_prueba, 12);

    print_r($array_prueba); // Imprime el contenido actualizado del array

    echo "<hr>";
    echo "<br>";

    // Elimina el último elemento del array de prueba
    array_pop($array_prueba); 
    print_r($array_prueba); // Imprime el contenido actualizado del array

    echo "<hr>";
    echo "<br>";

    echo "<h1> Ordenación de Arrays </h1>";
    /**
     * Ordena los arrays pasados como parámetros.
     *
     * @param array $array1 Array que se ordenará.
     * @param array $array2 Array que se ordenará en función de $array1.
     */
    $array1 = array(10, 200, 110, 0);
    $array2 = array(1, 3, 2, 4);

    // Usamos array_multisort para ordenar ambos arrays
    // Esto ordenará $array1 y $array2 juntos, de acuerdo con el orden de $array1
    array_multisort($array1, $array2);

    // Imprimimos los resultados
    echo "Array 1 ordenado: ";
    print_r($array1);
    echo "<br>";

    echo "Array 2 ordenado: ";
    print_r($array2);

    echo "<hr>";
    echo "<br>";

    echo "<h1> Ordenación por clave de Arrays </h1>";
    /**
     * Ordena dos arrays utilizando asort
     *
     * @param array $array3 Array que será ordenado por valor
     * @param array $array4 Array que será ordenado por valor
    */
    $array3 = array(9, 2, 5, 1, 4, 3, 6, 7, 8, 0);
    $array4 = array(1, 3, 2, 4);
    // Ordenamos usando asort
    asort($array3);
    asort($array4);

    // Imprimimos los resultados ordenados
    var_dump($array3);
    var_dump($array4);

    foreach ($array3 as $key => $value) {
        echo $value . "<br>";
        echo "<br>";
    }

    echo "<h1> Ordenación por valor de Arrays </h1>";
    /**
     * @var array $array5
     * Array de números desordenados
     */
    $array5 = array(4, 5, 3, 1, 10);
    $array6 = array(1, 2, 3, 4, 10, 9);

    // Ordenamos la array5
    sort($array5);
    sort($array6); // Ordena el array6
    var_dump($array6); // Imprime el contenido del array6

    ?>
</body>

</html>
