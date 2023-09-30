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
                // 1. Crear un array vacío para almacenar los 
                // números aleatorios
                $num_aleatorios = array();

                // 2. Bucle para generar 5 números aleatorios
                for ($i = 0; $i < 5; $i++) {
                    // 3. Generar un número aleatorio entre 
                    // 20 y 30
                    $number = rand(20, 30);

                    // 4. Añadir el número aleatorio al array
                    $num_aleatorios[] = $number;
                }

                // 5. Mostrar el array de números aleatorios
                print_r($num_aleatorios);
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