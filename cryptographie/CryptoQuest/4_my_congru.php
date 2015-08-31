<?php

function my_modulo_neg($int, $n) 
{
	if (is_int($int) && is_int($n) && ($int <= 0 && $n > 0)) 
	{
		return ($int - $n * ((int)($int / $n)));
	} 
	else 
	{
		echo "va t'acheter des doigts !\n";
		return 1;
	}
}

function my_modulo_pos($int, $n) 
{
	if (is_int($int) && is_int($n) && ($int >= 0 && $n > 0)) 
	{
		$reste = ($int - $n * ((int)($int / $n)));
		return $reste;
	} 
	else 
	{
		echo "va t'acheter des doigts !\n";
		return -1;
	}
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


function my_congru($a, $b, $n) 
{
	if (is_int($a) && is_int($b) && is_int($n) && $n != 0) 
	{
		if (my_modulo($a-$b, $n) == 0)
		{ 
			return 1; 
		} else {
			return 0;
		}
	} else {
		echo "va t'acheter des doigts !\n";
		return -1;
	}
}