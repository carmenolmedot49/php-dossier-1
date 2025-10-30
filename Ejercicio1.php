<?php

/**
* Escribe un programa que pida al usuario su nombre y lo salude en pantalla con un mensaje personalizado 
*/


    // Solicitar información por teclado

    echo "¿Cómo te llamas? ";
    fscanf(STDIN, "%s", $nombre);


    // Imprimir en pantalla

    echo "Hola " . $nombre . ", ¿qué tal estás?";
    

?>

