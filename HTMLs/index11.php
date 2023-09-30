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
                function leaders($array_num) {
                    $lideres = [];
                    $sum_right = 0;
                    
                    // 1. Recorrer el array de derecha a izquierda
                    for ($i = count($array_num) - 1; $i >= 0; $i--) {
                        // 2. Comprobar si el número actual es mayor 
                        // que la suma de los números a la derecha
                        if ($array_num[$i] > $sum_right) {
                            // 3. Añadir el número líder al comienzo 
                            // del array de líderes
                            array_unshift($lideres, $array_num[$i]);
                        }
                        
                        // 4. Actualizar la suma de los números a 
                        // la derecha
                        $sum_right += $array_num[$i];
                    }
                    
                    return $lideres;
                }

                // 5. Probar la función con varios ejemplos
                echo "Líderes en [1, 2, 3, 4, 0]: ";
                print_r(leaders([1, 2, 3, 4, 0]));

                echo "Líderes en [16, 17, 4, 3, 5, 2]: ";
                print_r(leaders([16, 17, 4, 3, 5, 2]));

                echo "Líderes en [5, 2, -1]: ";
                print_r(leaders([5, 2, -1]));

                echo "Líderes en [0, -1, -29, 3, 2]: ";
                print_r(leaders([0, -1, -29, 3, 2]));
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