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
                // 1. Cadena de saltos como una cadena de texto
                $c_saltos = "2,3,4,1,5,3,6,7,8,1,10,0,20";

                // 2. Mostrar la cadena original
                echo "Cadena original de saltos:\n";
                echo $c_saltos . "\n";

                // 3. Convertir la cadena en un array
                $array_saltos = explode(",", $c_saltos);

                // 4. Iniciar posición
                $position = 0;

                // 5. Array para guardar el resultado
                $result = [];

                // 6. Bucle para recorrer los saltos
                foreach ($array_saltos as $salto) {
                    // 7. Convertir el salto a un número entero
                    $salto = intval($salto);
                    
                    // 8. Si el salto es 0, terminar
                    if ($salto == 0) {
                        $result[] = 0;
                        break;
                    }
                    
                    // 9. Añadir el número del salto a la posición 
                    // actual en el resultado
                    $result[] = $salto;
                    
                    // 10. Añadir underscores (_) por la cantidad de 
                    // saltos
                    for ($i = 1; $i < $salto; $i++) {
                        $result[] = "_";
                    }
                }

                // 11. Convertir el array del resultado de nuevo en 
                // una cadena
                $c_result = implode(",", $result);

                // 12. Mostrar la cadena resultado
                echo "Resultado de saltos:\n";
                echo $c_result . "\n";
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