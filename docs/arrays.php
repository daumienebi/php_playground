<?php
echo("<h1> Prueba con arrays en PHP </h1>");
$cars = array("Ferrari","Ford","Mustang");

function mostrarContenidoArray($array){
    // Agregamos un elemento nuevo al array para probar
    $array [] = "New array element";
    // Obtener el tamaño del array
    $len = count($array);
    echo("<p> Coches disponibles : </p>");
    echo "<ul>";
    for ($i=0; $i < $len; $i++) {
        
        echo("<li>" .$array[$i]. "</li>");
    }
    echo "</ul>";
}

mostrarContenidoArray($cars);

echo("<p> Borramos el segundo coche : </p>");
// Modify the cars array to later, show the items again
unset($cars[1]); // deleting the second item
mostrarContenidoArray($cars);



// My brothers in christ, wtf hahaha
// Passing a function to an array lol
function myFunction() {
  echo "I come from a function!";
}

$myArr = array("Volvo", 15, "myFunction");

$myArr[2]();
?>