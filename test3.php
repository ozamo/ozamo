<?php
require 'vendor/autoload.php';
use MongoDB\Client;
use \MongoDB\Driver\Query;
use MongoDB\Driver\BulkWrite;
use MongoDB\Driver\Manager;
use MongoDB\Driver\Session;
use MongoDB\Model\DatabaseInfo;
use MongoDB\Model\DatabaseInfoIterator;
use Symfony\Bridge\PhpUnit\SetUpTearDownTrait;
require 'vendor/autoload.php'; // include Composer goodies

$cliente = new MongoDB\Client("mongodb://localhost:27017");
$colección = $cliente->demo->beers;

$resultado = $colección->find( [ 'name' => 'Hinterland', 'brewery' => 'BrewDog' ] );

foreach ($resultado as $entry) {
    echo $entry['_id'], ': ', $entry['name'], "\n";
}


/*
require 'vendor/autoload.php'; // incluir lo bueno de Composer

$cliente = new MongoDB\Client("mongodb://localhost:27017");
$colección = $cliente->demo->beers;

$resultado = $colección->insertOne( [ 'name' => 'Hinterland', 'brewery' => 'BrewDog' ] );

echo "Inserted with Object ID '{$resultado->getInsertedId()}'";

require 'vendor/autoload.php';
use MongoDB\Client;
use \MongoDB\Driver\Query;
use MongoDB\Driver\BulkWrite;
use MongoDB\Driver\Manager;
use MongoDB\Driver\Session;
use MongoDB\Model\DatabaseInfo;
use MongoDB\Model\DatabaseInfoIterator;
use Symfony\Bridge\PhpUnit\SetUpTearDownTrait;
$m = new MongoDB\Driver\Manager("mongodb://localhost:27017");
//$m = new MongoClient();
$s='catalogoProblemas';
$db = $m->s;
$collection = new MongoCollection($db, 'problemas');
$fruitQuery = array('_nombre' => 'inOrderEqual');

$cursor = $collection->find($fruitQuery);
foreach ($cursor as $doc) {
    var_dump($doc);
}
////////////////
<?php
    use \MongoDB\Driver\Manager;
    use \MongoDB\Driver\BulkWrite;
    use \MongoDB\Driver\Query;



    $host = 'localhost:27017';
    $usr = 'ozamora';
    $db = 'catalogoProblemas';
    $pass = 'PVNcPaIVqKsEQCKD';
    $collection = 'autorSchema';



// Iniciar conexion
$con = new Manager(sprintf('mongodb+srv://%s:%s@%s/%s', $usr, $pass, $host, $db));



// Definir namespace
$namespace = "$db.$collection";



// Obtener todos los registros
if (($res = $con->executeQuery($namespace, new Query([], [])))) {
    var_dump($res->toArray());
    $cursor = $db->inventory->find(['instock' => ['qty' => 5, 'warehouse' => 'A']]);
}


*/?>
