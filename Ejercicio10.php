<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Desarrolla un formulario html para el registro de usuarios que solicite el nombre, apellido, edad y dirección de correo electrónico. 
     Luego, muestra los datos ingresados en pantalla.  
-->


    <!-- Estilo del formulario -->

    <style>

        form input, form label {
            display: block;
            margin-bottom: 10px; /* espacio entre elementos */
        }
        
    </style>


    <!-- Formulario --> 
    
    <h2>Datos personales</h2>

    <form method="post">

        <label for="nombre">Nombre:</label>
        <input name="nombre" id="nombre" type="text" required/>

        <label for="apellidos">Apellidos:</label>
        <input name="apellidos" id="apellidos" type="text" required/>

        <label for="edad">Edad:</label>
        <input name="edad" id="edad" type="number" min="0" max="200" required/>

        <label for="correo">Correo electrónico:</label>
        <input name="correo" id="correo" type="email" required/>

        <button type="submit">Enviar</button>

    </form>

    <?php

        // Comprobar si el formulario fue enviado

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // $_SERVER["REQUEST_METHOD"] contiene el método con el que se ha enviado a la página
            // "POST" significa que se ha pulsado el botón "Enviar" del formulario


            // Obtener los datos del formulario

            $nombre = htmlspecialchars($_POST["nombre"]);
            $apellidos = htmlspecialchars($_POST["apellidos"]);
            $edad = intval($_POST["edad"]);
            $correo = htmlspecialchars($_POST["correo"]);

                // htmlspecialchars() convierte caracteres especiales a entidades HTML para evitar errores o ataques
                // $_POST["nombre"] contiene el valor ingresado en el input con name="nombre", "apellido" y "correo"
                // intval() hace que el número sea entero


            // Mostrar los datos en pantalla

            echo "<h3>Datos ingresados:</h3>";
            echo "<p>Nombre: $nombre</p>";
            echo "<p>Apellidos: $apellidos</p>";
            echo "<p>Edad: $edad años</p>";
            echo "<p>Correo electrónico: $correo</p>";

        }

    ?>

</body>
</html>