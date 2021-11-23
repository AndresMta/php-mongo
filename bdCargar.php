<?php 
require 'vendor/autoload.php';

//Instancio cliente de mongo.
$client = new MongoDB\Client(
    'mongodb+srv://Andres:root@mycluster.3lowz.mongodb.net');

//Obengo la colección con la que voy a trabajar.
$collection = $client->prueba_mongo->persona;

//Inserto los datos en la colección.
$collection->insertOne( [ 'nombre' => $_POST['nombre'], 'apellido' => $_POST['apellido'] ] );

header("Location: ./index.php");
exit;