<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicar</title>
</head>
<body>
    <?php
        $contador = 0;
        $multiplicar = 7;
        for ($contador = 1; $contador <= 10; ++$contador) {
            $multi = $multiplicar * $contador;
            echo "$multiplicar x $contador = $multi<br/>";
        }
    ?>
</body>
</html>
