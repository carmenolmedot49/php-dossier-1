<?php
/** 
 * Escribe el código que declare dos variables numéricas introducidas por teclado y realice la suma. 
 * El resultado debe mostrarse en un mensaje utilizando las etiquetas <p>
 */


    // Comprobar si el formulario se ha enviado

    if (isset($_POST['num1']) && isset($_POST['num2'])) {


        // Recoger los números introducidos por el usuario

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];


        // Suma

        $resultado = $num1 + $num2;


        // Mostrar el resultado dentro de un párrafo

        echo "<p>El resultado de la suma de los dos números es: $resultado</p>";


    }


?>



<!-- Formulario para que el usuario introduzca los números -->

<form method="post">

    <label>Introduce un número:</label>
    <input type="number" name="num1" required><br><br>

    <label>Introduce otro número:</label>
    <input type="number" name="num2" required><br><br>

    <input type="submit" value="Sumar">

</form>
