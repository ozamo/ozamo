<?php

/**
 *
 */
class fix34
{

	public function fix34()
			{
				# code...
			}
public function profix34($nums=" ") {
  $nums=str_split($nums);
	$i= 0;

	while($i < count($nums) && $nums[$i] != 3)
			$i++;

	$j = $i + 1;

	while($j < count($nums) && $nums[$j] != 4)
			$j++;

	while($i < count($nums)) {
		
			if($nums[$i] == 3) {
					$temp = $nums[$i+1];
					$nums[$i+1] = $nums[$j];
					$nums[$j] = $temp;

					while($j < count($nums) && $nums[$i] != 4)
							$j++;
			}
			$i++;
	}
$nums=implode(" ",$nums);
	return $nums;
}}
$objefx = new fix34();
?>
