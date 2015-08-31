<?php

function inv_mod($a, $n)
{
	$a = abs($a);
	$n = abs($n);
	if($a != 0 || $n != 0) {
		for($i = 1; $i < $n; $i++) {
			if(my_modulo($i*$a, $n) == 1) {
				return $i;
			}
		}
	}
	echo "Va t'acheter des doigts !";
	return 0;
}

function my_modulo($int, $n) 
{
	if (is_int($int) && is_int($n) && $n != 0) 
	{
		$reste = ($int - $n * ((int)($int / $n)));
		return $reste;
	} 
	else
	{
		echo "va t'acheter des doigts !\n";
		return 0;
	}
}