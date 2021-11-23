<?php
require 'vendor/autoload.php';

//Instancio cliente de mongo.
$client = new MongoDB\Client(
    'mongodb+srv://Andres:root@mycluster.3lowz.mongodb.net');

//Obengo la colección con la que voy a trabajar.
$collection = $client->prueba_mongo->persona;

//Consulto los datos
$result = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);

//Parseo a objeto.
$result = (object) $result;

require './editar.html';



?>