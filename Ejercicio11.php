<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Desarrolla una aplicación que genere contraseñas aleatorias de 8 caracteres, 
combinando letras mayúsculas, minúsculas y números. 
La lógica funcional de la generación de contraseñas se debe realizar con una función que recibe como parámetro 
la longitud que debe tener y debe devolver la contraseña generada.
--> 

    <h2>Generador de contraseñas</h2> 
    <h3>Crea una contraseña de 8 caracteres de forma aleatoria en el siguiente botón: </h3>

    <form method="post">
        <button type="submit" name="generar">Crear contraseña</button>
    </form>


    <?php

        function createPassword($longitud) {

            // Definir el contenido de la contraseña con minúsculas, mayúsculas y números

            $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $password = '';


            // Bucle que recorre todos los caracteres que hemos definido

            for ($i = 0; $i < $longitud; $i++) {


                // Creación de la contraseña de manera aleatoria

                $password .= $caracteres[rand(0, strlen($caracteres) - 1)];

                    // .= añade al final de la variable $contrasena el caracter que viene a continuación (cada vez que salga un caracter nuevo tenemos que sacar otro a continuación)
                    // strlen($caracteres) devuelve la longitud total de la cadena, en este caso la cadena de caracteres tiene 62
                    // rand(0, strlen($caracteres) - 1) genera un número aleatorio entre el 0 y el 61

            }


            // Devolver la contraseña creada aleatoriamente

            return $password;

        }


        // Hacer que la contraseña tenga solo 8 caracteres

        $password = createPassword(8);
        
        echo "Contraseña generada: " . $password;

    ?>

</body>
</html>