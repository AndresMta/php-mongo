<?php 
require 'vendor/autoload.php';

//Instancio cliente de mongo.
$client = new MongoDB\Client(
    'mongodb+srv://Andres:root@mycluster.3lowz.mongodb.net');

//Obengo la colección con la que voy a trabajar.
$collection = $client->prueba_mongo->persona;

//Consulto los datos
$results = $collection->find();

require './index.html';

?>