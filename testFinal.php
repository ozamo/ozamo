<?php
require 'vendor/autoload.php';
$client = new MongoDB\Client("mongodb+srv://ozamora:PVNcPaIVqKsEQCKD@ingsof-w6zh2.mongodb.net/test?retryWrites=true&w=majority");
$db=$client->catalogoProblemas;
$colección=$db->autorSchema;
$cursor=$colección->find(['_nombre'=>'fix34']);
foreach ($cursor as $documento) {
  //echo $documento['_id'].PHP_EOL;
  echo $documento['_nombre'].PHP_EOL;
  //echo $documento['_descripcion'].PHP_EOL;
  echo $documento['_clase'].PHP_EOL;
}

?>
