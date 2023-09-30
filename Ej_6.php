<!DOCTYPE html>
<html>
<head>
    <title>Name with Random Size</title>
</head>
<body>
    <h1>Nombre con Tamaño Aleatorio</h1>

    <?php
        // 1. Generar un tamaño de fuente aleatorio 
        // entre 200% y 700%
        $tamano_fuente = rand(200, 700);

        // 2. Mostrar el nombre con un tamaño de 
        // fuente aleatorio
        echo "<div style='font-size: " . 
        $tamano_fuente . 
        "%;'>Richard Francisco Vaca Garcia</div>";
    ?>
</body>
</html>

