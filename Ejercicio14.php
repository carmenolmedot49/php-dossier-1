<?php

/** Diseña una aplicación que permita ingresar calificaciones para varias asignaturas y luego calcule su promedio. 
 * El nombre de la asignatura y su nota se deben introducir directamente en el código mediante un array. 
 * Muestra el promedio total y determina si el usuario puede pasar de curso, si el promedio es igual o superior a 6. 
*/


    // Inicio

    echo "Notas de Iván: ";


    // Crear un array de notas

    $notas = [
        "Tecnología" => 8,
        "Matemáticas" => 4,
        "Inglés" => 9,
        "Educación física" => 10,
        "Biología" => 3,
        "Historia" => 6,
    ];


    // Recorrer el array y sumar las notas

    echo "<ul>";

        foreach ($notas as $asignatura => $nota) {
            echo "<li>$asignatura: $nota</li>";
        }

    echo "</ul>";


    // Calcular la media y mostrarla
    
    $media = array_sum($notas)/count($notas);
    echo "Media final: " . number_format($media, 2). "<br>";


    // Mostrar si pasa de curso o no

    if ($media >= 6) {
        echo "¡Enhorabuena, Iván! ¡Pasas de curso!";
    } else {
        echo "Lo sentimos, este año tienes que repetir...";
    }

?>