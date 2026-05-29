<?php

echo("<h1>Mostrando los datos obtenidos a través de \"_POST\" :</h1>");

// Obtener los datos, nombre y email
$name = $_POST["name"];
$email = $_POST["email"];

echo("Tu nombre es $name <br>");
echo("Tu email es : $email <br>");

?>