<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Outputs</title>
</head>
<body>
  <?php
    echo('Hola mundo!');
    // Printea Hola mundo! en stdout
    // stdout es la página web si se está ejecutando en el navegador

    print("Hola mundo"); // Lo mismo que echo

    // echo y print también son construcciones del lenguaje, por lo que puedes eliminar los paréntesis

    echo 'Hola mundo!';
    print 'Hola mundo!';

    $parrafo = 'parrafo';

    echo 100; // Imprime el valor 100 en la pantalla
    echo $parrafo; // Echo también puede imprimir el contenido de variables

  ?>

  <p><?= $paragraph ?></p>
</body>
</html>
