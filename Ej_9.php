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
