<?php

function my_congru($a, $b, $n) 
{
	$temp = $a-$b;
	if (($temp - $n * ((int)($temp / $n))) == 0)
	{ 
		return 1; 
	} else {
		return 0;
	}
}

function is_classeq($tab, $x, $n) 
{
	if (is_array($tab) && is_int($x) && is_int($n) && $n != 0)
	{
		foreach ($tab as $value) {
			if(my_congru($value, $x, $n) == 0) {
				return 0;
			}
		}
		return 1;
	} else {
		echo "va t'acheter des doigts !\n";
		return -1;
	}
}