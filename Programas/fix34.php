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
public function profix34($nums =array()) {
    $i= 0;

    while($i < strlen($nums) && $nums[$i] != 3)
        $i++;

    $j = $i + 1;

    while($j < strlen($nums) && $nums[$i] != 4)
        $j++;

    while($i < strlen($nums)) {
        if($nums[$i] == 3) {
            $temp = $nums[$i+1];
            $nums[$i+1] = $nums[$j];
            $nums[$j] = $temp;

            while($j < strlen($nums) && $nums[$j] != 4)
                $j++;
        }
        $i++;
    }

    return $nums;
}}
$objeWS = new fix34();
?>
