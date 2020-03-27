<?php
//Problema No. 4 withoutString

	class withoutString
	{
		public function withoutString()
		{
			# code...
		}

		public function probWithoutString($base, $remove)
		{
			$result = "";
			$count = 0;

			for(;$count < strlen($base);)
			{

				if(!((strcasecmp(substr($base, $count, strlen($remove)), $remove) == 0)))
				{
					$result = $result.substr($base, $count, 1);
					$count ++;
				}
				else
				{
					$count += strlen($remove);

				}

			}

			if(substr($result, 0, 1) == " ")
			{
				$result = substr($result, 1);
			}

			if (substr($result, strlen($result) - 1, 1) == " ")
			{
				$result = substr($result, 0, strlen($result) - 1);
			}

			if (strlen($base) - 1 <= strlen($remove) && !(strcasecmp(substr($base, $count), $remove)))
			{
				$result .= substr($base, $count);
			}
			return $result;
		}
	}

	//Creacion de Objeto para la demas clases
	$objeWS = new withoutString();
?>
