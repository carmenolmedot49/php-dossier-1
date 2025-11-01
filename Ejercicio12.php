<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Escribe un programa que muestre la fecha actual en diferentes formatos, 
como "dd/mm/yyyy" y "dia, mes, año". 
La fecha no se puede introducir manualmente.
--> 

    <h2>Fecha de hoy</h2>

    <?php


        // Establecer fecha y hora por omisión

        date_default_timezone_set('Europe/Madrid');


        // Fecha en dd/mm/yyyy"

        $fecha1 = date('d/m/y');


        // Fecha en "dia, mes, año"

        $fecha2 = date('j \d\e F, Y');


        // Fecha formato 3
        
        $fecha3 = date('l jS \of F Y h:i:s A');


        // Fecha formato 4

        $fecha4 = date(DATE_RFC2822);


        // Resultados

        echo "Formato 1 : " . $fecha1 . "<br>";
        echo "Formato 2 : " . $fecha2 . "<br>";
        echo "Formato 3 : " . $fecha3 . "<br>";
        echo "Formato 4 : " . $fecha4 . "<br>";

    ?>
    
</body>
</html>