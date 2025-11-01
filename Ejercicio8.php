<?php

/** Crea un programa que convierta una cantidad en dólares a euros. 
 * Pide al usuario que ingrese la cantidad en dólares y muestra el equivalente en euros. 
 * La cantidad de dólares se escribe directamente en el código. 
*/


    // Solicitar por teclado la cantidad en dólares

    echo "Introduce la cantidad en dólares: ";
    fscanf(STDIN, "%f", $dolar);


    // Calcular el equivalente a euros

    $euro =  round ($dolar * 0.86, 2);


    // Resultados

    if ($euro == 1) { 
        echo $dolar . " dólares son " . $euro . " euro (" . $dolar . "$ = " . $euro . "€).";
    } elseif ($dolar == 1) {
        echo $dolar . " dólar son " . $euro . " euros (" . $dolar . "$ = " . $euro . "€).";
    } else {
        echo $dolar . " dólares son " . $euro . " euros (" . $dolar . "$ = " . $euro . "€).";
    }


    // Fin del programa

    echo "\nFin del programa. ¡Gracias por participar!";


?>