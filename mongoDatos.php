<?php
require 'vendor/autoload.php';
//Problema No. 1 mongoDatos

	class mongoDatos
	{

		public function mongoDatos()
		{

		}

		public function recuDatos($nomProblema,$mongoField)
		{
			$client = new MongoDB\Client("mongodb+srv://ozamora:PVNcPaIVqKsEQCKD@ingsof-w6zh2.mongodb.net/test?retryWrites=true&w=majority");
			$db=$client->catalogoProblemas;
			$colección=$db->autorSchema;
			$cursor=$colección->find(['_nombre'=>$nomProblema]);
      foreach ($cursor as $documento) {
        //echo $documento['_id'].PHP_EOL;
        return $documento[$mongoField];

      }
	  }
  /*  public function solucioes($nomProblema)
    {
      $cursor=$colección->find(['_nombre'=>$nomProblema]);
      foreach ($cursor as $documento) {
        //echo $documento['_id'].PHP_EOL;
        echo $documento['_PosiblesSoluciones'].PHP_EOL;

      }
    }*/
	}
	//Creacion de Objeto para la demas clases
	$objeData = new mongoDatos();

?>
