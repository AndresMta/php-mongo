<?php

require 'vendor/autoload.php';

//Instancio cliente de mongo.
$client = new MongoDB\Client(
    'mongodb+srv://Andres:root@mycluster.3lowz.mongodb.net');

//Obengo la colección con la que voy a trabajar.
$collection = $client->prueba_mongo->persona;

//Edito el documento.
$collection->updateOne(
    ['_id' => new MongoDB\BSON\ObjectID($_POST['id'])],
    ['$set' => ['nombre' => $_POST['nombre'], 'apellido' => $_POST['apellido']]]
);

header("Location: ./index.php");
exit;

?>