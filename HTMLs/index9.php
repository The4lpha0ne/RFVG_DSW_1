<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/IES.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <title>RFVG-DSW</title>
</head>
<body>
    <div class="contenido">
        <h1 class="titulo1">
            Desarrollo Web en Entorno Servidor (DPL)
        </h1>

        <p>Ejercicios PHP 1</p>
        
        <p class="hashtag">
            A continuación, los ejercicios 1-12:
        </p>

        <nav class="navegacion">
            <a href="../index.html">
                (Vuelta al Menu Principal)
            </a>
        </nav>

        <div class="resultado">
            <?php
                // 1. Declarar el array con los valores dados
                $values = array(1, 2, 'antonio', 200, 'pepe');

                // 2. Obtener el número de elementos en el array
                $length = count($values);

                // 3. Bucle para recorrer el array desde el último 
                // elemento hasta el primero
                for ($i = $length - 1; $i >= 0; $i--) {
                    // 4. Mostrar cada elemento en una línea 
                    // separada
                    echo $values[$i] . "\n";
                }
            ?>
        </div>
    </div>

    <footer>
        <p class="texto_footer">
            Richard Francisco Vaca Garcia, 2do CFGS DAW
        </p>
    </footer>
</body>
</html>