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
