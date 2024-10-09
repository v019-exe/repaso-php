<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $trabajadores = array("12345678B" => "Juan", "12356765C" => "Pedro", "45354366B" => "Carlos", "78787899A" => "Marcos", "1111111A" => "Juanito", "3333333C" => "Federico de los palotes", "5555555H" => "Mohamed");
        
        foreach ($trabajadores as $clave => $valor) {
            echo $clave . ": " . $valor . "<br>";
            echo "<br>";
        }

        $trabajadores["00098556R"] = "Pepito";
        array_pop($trabajadores);

        print_r($trabajadores);

        echo "<hr>";
        echo "<br>";

        foreach ($trabajadores as $clave => $valor) {
            echo $clave . ": " . $valor . "<br>";
            echo "<br>";
        }

        echo "<hr>";
        echo "<br>";

        $array_prueba = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        print_r($array_prueba);

        array_push($array_prueba, 11);
        array_push($array_prueba, 12);

        print_r($array_prueba);
        
        echo "<hr>";
        echo "<br>";

        array_pop($array_prueba);
        print_r($array_prueba);

        echo "<hr>";
        echo "<br>";

        echo "<h1> Ordenación de Arrays </h1>";
        $array1 = array(10, 200, 110, 0);
        $array2 = array(1, 3, 2, 4);
        array_multisort($array1, $array2);  

        var_dump($array1);
        var_dump($array2);

        echo "<hr>";
        echo "<br>";

        echo "<h1> Ordenación por clave de Arrays </h1>";
        $array3 = array(9, 2, 5, 1, 4, 3, 6, 7, 8, 0);
        $array4 = array(1, 3, 2, 4);

        asort($array3);
        asort($array4);

        var_dump($array3);
        var_dump($array4);

        foreach ($array3 as $key => $value) {
            echo $value . "<br>";
            echo "<br>";
        }
        
    ?>
</body>
</html>
