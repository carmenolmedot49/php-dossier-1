<?php

/** Escribe el código que declare dos variables numéricas y realice la suma. 
*/


    // Declaración de variables, solicitadas por teclado

    echo "Introduce un número: ";
    fscanf(STDIN, "%f", $num1);

    echo "Introduce el número que quieras sumarle: ";
    fscanf(STDIN, "%f", $num2);


    // Suma
    
    $resultado = $num1 + $num2;


    // Resultado de la suma de las variables
    
    echo "El resultado de la suma de los dos números es: " . $resultado . ".";


    // Fin del programa

    echo "\nFin del programa. ¡Gracias por participar!";


?>