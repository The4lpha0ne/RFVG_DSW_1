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
                // 1. Crear un array vacío para almacenar 
                // los números pares
                $num_pares = array();

                // 2. Bucle para recorrer los números del 1 al 100
                for ($i = 1; $i <= 100; $i++) {
                    // 3. Comprobar si el número es par
                    if ($i % 2 == 0) {
                        // 4. Añadir el número par al array
                        $num_pares[] = $i;
                    }
                }

                // 5. Mostrar el array de números pares
                print_r($num_pares);
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