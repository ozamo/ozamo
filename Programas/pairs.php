<?php
//Problema No. 3 pairs

	class pairs
	{
		public function pairs()
		{
			# code...
		}

		public function proPairs($cadena=array())
		{
      $result=array();
       for($cadena2 = array(); $cadena2<$cadena; $cadena2++){

         $result=array_map(substr($cadena2,1) , substr($cadena2, strlen($cadena2)-1));

       }
       $result=implode(" ",$result);
       return $result;
	}}

	//Creacion de Objeto para la demas clases
	$objePa = new pairs();




?>
