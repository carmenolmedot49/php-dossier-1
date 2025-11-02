<?php

/** Diseña un programa que calcule el Índice de Masa Corporal (IMC) a partir del peso y la altura ingresados por el usuario. 
 * Muestra el IMC y su categoría (bajo peso, normal, sobrepeso, obeso, etc.). 
 * Se considera: 
 *  Bajo peso:  si el IMC es inferior a 18,5
 *  Peso normal:  si el imc esta entre 18,5 a 24,9
 *  Sobrepeso:  si el imc esta entre 24,9 a 29,9
 *  Obesidad: si sobrepasa 29,9.
*/


    // Solicitar por teclado el peso y la altura

    echo "Introduce tu peso en kilogramos: ";
    fscanf(STDIN, "%f", $peso);

    echo "Introduce tu altura en metros: ";
    fscanf(STDIN, "%f", $altura);


    // Cálculo del IMC

    $imc = round($peso / ($altura ** 2), 2);


    // Cálculo de la categoría

    if ($imc < 18.5) {
        $categoria = "bajo peso";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        $categoria = "peso normal";
    } elseif ($imc >= 24.9 && $imc < 29.9) {
        $categoria = "sobrepeso";
    } else {
        $categoria = "obesidad";
    }


    // Resultados

    echo "Tu IMC es de " . $imc . " y tienes " . $categoria . ".";


    // Fin del programa
    
    echo "\nFin del programa. ¡Gracias por participar!";


?>