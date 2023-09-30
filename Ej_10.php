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
