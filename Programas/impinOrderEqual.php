<pre>
	//Problema No. 1 inOrderEqual

		class inOrderEqual
		{
			public function inOrderEqual()
			{
				# code...
			}

			public function probInOrderEqual($valorA, $valorB, $valorC, $bandera)
			{
				if(!$bandera && $valorA < $valorB && $valorB < $valorC)
					return "verdadero";

				if($bandera && $valorA <= $valorB && $valorB <= $valorC)
					return "verdadero";
				else
					return "falso";
			}
		}

		//Creacion de Objeto para la demas clases
		$objeIOE = new inOrderEqual();
	?>
