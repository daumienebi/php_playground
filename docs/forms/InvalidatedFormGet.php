<?php

echo("<h1>Mostrando los datos obtenidos a través de \"_GET\" :</h1>");

// Obtener los datos, nombre y email
$name = $_GET["name"];
$email = $_GET["email"];

echo("Tu nombre es $name <br>");
echo("Tu email es : $email <br>");

?>