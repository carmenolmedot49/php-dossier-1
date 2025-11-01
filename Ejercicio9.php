<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <!--  
    Crea un programa que convierta una cantidad en dólares a euros. 
     * Pide al usuario que ingrese la cantidad en dólares y muestra el equivalente en euros. 
     * La cantidad de dólares se escribe directamente en el código. 
     * Emplea html como interfaz. 
     * Utiliza un input para reflejar la cantidad de dólares y un botón para hacer el cálculo. 
     * El resultado se mostrará con un mensaje mediante <p> debajo del botón.
-->


    <!-- Solicitar por teclado la cantidad en dólares -->

    <form method="post">

        <label>Dólares: </label>
        <input name="dolar" id="dolar" type="number" step="0.01" required/> 

            <!-- (step="0.01" permite decimales y required hace que no se deje en blanco) -->

            
        <button type="submit">Convertir a euro</button>

    </form>

    <?php

        // Validar la información que el usuario ha facilitado

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // $_SERVER["REQUEST_METHOD"] contiene el método con el que se ha enviado a la página
            // "POST" significa que se ha pulsado el botón "Enviar" del formulario


            // Obtener el valor del input

            $dolar = floatval($_POST["dolar"]);

                // floatval() hace que el número sea decimal


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
        
        }

    ?>

</body>
</html>

