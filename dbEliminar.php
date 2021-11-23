<?php
require 'vendor/autoload.php';



//Instancio cliente de mongo.
$client = new MongoDB\Client(
    'mongodb+srv://Andres:<pass>@mycluster.3lowz.mongodb.net');

//Obengo la colección con la que voy a trabajar.
$collection = $client->prueba_mongo->persona;

//Elimino el documento.
$collection->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);

header("Location: ./index.php");
exit;

?>
