<?php
//Problema No. 3 pairs

	class pairs
	{
		public function pairs()
		{
			# code...
		}

		public function proPairs($cadena)
		{
			$result = "";
			$count = 0;


			while (substr($cadena, $count, 1) == " ")
			{
				$count ++;
			}

			$result.= substr($cadena, $count, 1);


			for(;$count < strlen($cadena); $count ++)
			{
				if(substr($cadena, $count, 1) == " ")
				{
					$result.= substr($cadena, $count - 1, 1);
					if(!(substr($cadena, $count + 1, 1) == null))
					{
						$result.= substr($cadena, $count + 1, 1);


					}
				}
			}
        $result.= substr($cadena, strlen($cadena)-1, 1);
			return $result;
		}
	}

	//Creacion de Objeto para la demas clases
	$objePa = new pairs();




?>
