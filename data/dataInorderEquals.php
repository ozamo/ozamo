<?php
require 'vendor/autoload.php';
<?php
//Problema No. 1 inOrderEqual

	class inOrderEqual
	{
		public function inOrderEqual()
		{
      $client = new MongoDB\Client("mongodb+srv://ozamora:PVNcPaIVqKsEQCKD@ingsof-w6zh2.mongodb.net/test?retryWrites=true&w=majority");
      $db=$client->catalogoProblemas;
      $colección=$db->autorSchema;
		}

		public function descripcion($valorA)
		{
			$cursor=$colección->find(['_nombre'=>$valorA]);
      foreach ($cursor as $documento) {
        //echo $documento['_id'].PHP_EOL;
        echo $documento['_descripcion'].PHP_EOL;

      }
	  }
    public function solucioes($valorA)
    {
      $cursor=$colección->find(['_nombre'=>$valorA]);
      foreach ($cursor as $documento) {
        //echo $documento['_id'].PHP_EOL;
        echo $documento['_PosiblesSoluciones'].PHP_EOL;

      }
    }
	//Creacion de Objeto para la demas clases
	$objeData = new inOrderEqual();
?>








?>
