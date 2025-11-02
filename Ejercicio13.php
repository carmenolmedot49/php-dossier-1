<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Crea un script que permita a un usuario agregar productos a una lista de compras, 
la lista de compras será un array estático, no es necesario realizar una interfaz html para agregar los productos, se realiza directamente desde código. 
Luego, muestra la lista completa con los productos y sus cantidades. 
La lista de productos debe mostrarse con las etiquetas html <ul> y <li>
--> 


    <h1>Lista de la compra</h1>


    <?php

        // Crear un array

        $lista = [
            "Pan" => 1,
            "Huevos" => 12,
            "Leche" => 2,
            "Pasta" => 1,
        ];


        // Mostrar lista (abrimos con <ul> y cerramos con </ul>)

        echo "<ul>";

            // Mostrar la lista como un producto junto a la cantidad del producto

            foreach ($lista as $producto => $cantidad) {

                // Así se reflejará en el resultado
                
                echo "<li>$producto: $cantidad</li>";
            }

        echo "</ul>";
        
    ?>

</body>
</html>