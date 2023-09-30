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
