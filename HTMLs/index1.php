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
                // 1. Declarar una variable de cada tipo de dato
                $entero = 20;
                $float = 3.14;
                $boolean = true;
                $cadena = "Hello, world";
                $arreglo = array(1, 2, 3);
                $objeto = (object) ["clave" => "valor"];
                $nulo = null;

                // 2. Uso de comillas simples y dobles con 
                // secuencias de escape
                $cadena1 = '\'Uso de comillas simples\'';
                $cadena2 = "\"Uso de comillas dobles\"";

                // 3. Concatenar varias cadenas
                $concatenacion = $cadena1 . ", " . $cadena2;

                // 4. Concatenar varias cadenas con sus valores 
                // correspondientes
                $concatenacionConValores = "El entero es: " . 
                $entero . ", el flotante es: " . $float;

                // 5. Salida de una de las cadenas mediante echo y 
                // mediante print
                echo $cadena1 . "\n";
                print $cadena2 . "\n";

                // 6. Declarar una constante mediante define 
                // y const
                define("MI_CONSTANTE", "Valor de mi constante");
                const OTRA_CONSTANTE = "Valor de otra constante";

                // 7. Ver los resultados
                echo "Concatenación de cadenas: " . 
                $concatenacion . "\n";
                echo "Concatenación con valores: " . 
                $concatenacionConValores . "\n";
                echo "Constante con define: " . 
                MI_CONSTANTE . "\n";
                echo "Constante con const: " . 
                OTRA_CONSTANTE . "\n";

                // 8. Uso de var_dump()
                var_dump($entero);

                // 9. Realizar una conversión explícita de tipos
                $enteroAFloat = (float) $entero;
                echo "Conversión explícita de tipos (entero a flotante): " . 
                $enteroAFloat . "\n";

                // 10. Uso de referencias
                $referencia = &$entero;
                $referencia++;
                echo "Uso de referencias (entero incrementado): " . 
                $entero . "\n";
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