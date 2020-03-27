<?php
    use \MongoDB\Driver\Manager;
    use \MongoDB\Driver\BulkWrite;
    use \MongoDB\Driver\Query;



    $host = 'ingsof-shard-00-00-w6zh2.mongodb.net:27017,ingsof-shard-00-01-w6zh2.mongodb.net:27017,ingsof-shard-00-02-w6zh2.mongodb.net:27017/test?ssl=true&replicaSet=IngSof-shard-0&authSource=admin&retryWrites=true&w=majority';
    $usr = 'ozamora';
    $db = 'catalogoProblemas';
    $pass = 'PVNcPaIVqKsEQCKD';
    $collection = 'autorSchema';



// Iniciar conexion
$con = new Manager(sprintf('mongodb://%s:%s@%s/%s', $usr, $pass, $host, $db));



// Definir namespace
$namespace = "$db.$collection";


$filter = ['_nombre' => "noTeenSum"];
$options = [
'projection' => ['_id' => 0],
];
// Obtener todos los registros
if (($res = $con->executeQuery($namespace, new Query($filter, [])))) {
    //$arra=($res = $con->executeQuery($namespace, new Query($filter, [])));
    //$res=($res->toArray());
    print_r($res->toArray());
    echo 'tipo'.gettype($res);
  /*  $array = json_decode($res->toArray(), true);
    foreach ($array as $value){
    $array2[] = $value->_id;

    echo $array2->_id;}*/
    $res = iterator_to_array($res);
    array_walk(
        $res,
        function (&$record)
        {
          if (isset($record['subDoc'])) {
            $record['subDoc'] = iterator_to_array($record['subDoc']);
          }
      }
      );
      var_dump($res);
    //echo "numeros= ".count($res);
    //echo in_array($res,'_nombre');

///$query = new MongoDB\Driver\Query($filter, $options);
//$rows = $mongo->executeQuery('db_name.my_collection', $query); // $mongo contains the connection object to MongoDB
$test = $res->findOn(array(true));
$data = $test->jsonSerialize();

echo $data->_id;
}
?>
