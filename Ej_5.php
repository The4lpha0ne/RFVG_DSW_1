<!DOCTYPE html>
<html>
<head>
    <title>Random Dice</title>
</head>
<body>
    <h1>Tirada de Dado</h1>

    <?php
        // 1. Generar un número aleatorio entre 1 y 6
        $num_aleatorio = rand(1, 6);

        // 2. Mostrar la imagen correspondiente al 
        // número generado
        echo "<img src='./img/dado" . $num_aleatorio . 
        ".png' alt='Cara del dado con el número: " . 
        "' width='100' height='100'>";
    ?>
</body>
</html>
