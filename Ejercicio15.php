<?php

/* Diseña una aplicación que realice las siguientes acciones:
• Recorra un array numérica y muestre sus valores
• Añadir un elemento al array
• Eliminar un elemento del array
• Muestre los valores del array de forma ordenada (ascendente o descendente)
El programa principal crea e inicializa un array numérico, el resto de las acciones 
descritas se deben realizar en funciones independientes. 
*/


    // Función para mostrar los valores del array

    function showArray($array) {

        echo "<p>Valores actuales del array:</p><ul>";
        foreach ($array as $valor) {
            echo "<li>$valor</li>";
        }
        echo "</ul>";
    }


    // Crear e inicializar el array

    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    echo "<h3>Array original:</h3>";
    showArray($array);


    // Añadir un elemento

    function addElement($array, $nuevoElemento) {

        $array[] = $nuevoElemento; // añade al final del array
        return $array;
    }

    $array = addElement($array, 10);
    echo "<h3>Array después de añadir un elemento:</h3>";
    showArray($array);


    // Eliminar un elemento

    function deleteElement($array, $elementoAEliminar) {

        $clave = array_search($elementoAEliminar, $array); // busca su posición
        if ($clave !== false) {
            unset($array[$clave]); // elimina el elemento
        }
        return $array;
    }

    $array = deleteElement($array, 8);
    echo "<h3>Array después de eliminar un elemento:</h3>";
    showArray($array);


    // Mostrar los valores del array de forma ordenada descendente

    function ordenarArray($array) {

        rsort($array); 
        return $array;
    }

    $array = ordenarArray($array);
    echo "<h3>Array ordenado de forma descendente:</h3>";
    showArray($array);

?>
