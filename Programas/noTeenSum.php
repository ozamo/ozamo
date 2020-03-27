<?php
//Problema No. 2 noTeenSum

	class noTeenSum
	{
		public function noTeenSum()
		{
			# code...
		}

		public function probNoTeenSum($numA, $numB, $numC)
		{
			return $this -> fixTeen($numA) + $this -> fixTeen($numB) + $this -> fixTeen($numC);
		}

		public function fixTeen($numero)
		{
			if($numero >= 13 && $numero <= 19 && $numero != 15 && $numero != 16)
				return 0;
			else
				return $numero;
		}
	}

	//Creacion de Objeto para la demas clases
	$objeNTS = new noTeenSum();

	echo $objeNTS -> probNoTeenSum(17, 18, 19);
?>
