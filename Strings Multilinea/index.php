<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multilinea strings</title>
</head>
<body>
  <?php
    $numero = 200;

    // String multilinea sin interpolación, es decir variales de por medio
    $multilinea = <<<'END'
    String
    Multilinea
    END;

    // string multilinea con interpolación, en este podemos incrustar variables
    $multilinea_vars = <<<END
    Tengo
    $200
    en el banco
    END;
    
  ?>

</body>
</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multilinea strings</title>
</head>
<body>
  <?php
    $numero = 200;

    // String multilinea sin interpolación, es decir variales de por medio
    $multilinea = <<<'END'
    String
    Multilinea
    END;

    // string multilinea con interpolación, en este podemos incrustar variables
    $multilinea_vars = <<<END
    Tengo
    $200
    en el banco
    END;
    
  ?>

</body>
</html>
>>>>>>> 4fe9ebe2b19c6eb0bef3da95220172171dd5c644
