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
                // 1. Cadena original con valores 
                // separados por comas
                $c_original = "1,2,3,2,4,1,5";

                // 2. Mostrar la cadena original
                echo "Cadena original:\n";
                echo $c_original . "\n";

                // 3. Convertir la cadena en un array
                $array_values = explode(",", $c_original);

                // 4. Eliminar los valores duplicados 
                // del array
                $array_unicos = array_unique($array_values);

                // 5. Convertir el array de nuevo en 
                // una cadena
                $c_sin_duplicados = implode(",", $array_unicos);

                // 6. Mostrar la cadena sin valores 
                // duplicados
                echo "Cadena sin duplicados:\n";
                echo $c_sin_duplicados . "\n";
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