<?php


require 'vendor/autoload.php';
use MongoDB\Client;
use MongoDB\Driver\BulkWrite;
use MongoDB\Driver\Manager;
use MongoDB\Driver\Session;
use MongoDB\Model\DatabaseInfo;
use MongoDB\Model\DatabaseInfoIterator;
use Symfony\Bridge\PhpUnit\SetUpTearDownTrait;




    $host = 'ingsof-w6zh2.mongodb.net/test?retryWrites=true&w=majority';
    $usr = 'ozamora';
    $YourDB = 'catalogoProblemas';
    $pass = 'PVNcPaIVqKsEQCKD';
    $YourCollection = 'autorSchema';



// Iniciar conexion
$connect = new MongoDB\Client('mongodb+srv://ozamora:PVNcPaIVqKsEQCKD@ingsof-w6zh2.mongodb.net/test?retryWrites=true&w=majority');
$db = $connect->catalogoProblemas;
$collection = $db->autorSchema;
var_dump ($collection);

$test = $collection->findOne(array("_nombre"=>'pairs'));
$data = $test->jsonSerialize();

echo $data->_id;

?>
