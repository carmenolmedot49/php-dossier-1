<?php

/** Escribe el código que convierta una temperatura de grados Celsius a Fahrenheit. */


    // Declaración de variable Celsius por teclado

    echo "Introduce los grados Celsius: ";
    fscanf(STDIN, "%f", $celsius);


    // Cálculo de los grados farenhei a partir de los Celsius

    $farenheit = ($celsius * 1.8) + 32;


    // Resultados

    echo "La temperatura de " . $celsius . "ºC"  . " equivale a " . $farenheit . "ºF.";


    // Fin del programa

    echo "\nFin del programa. ¡Gracias por participar!";


?>