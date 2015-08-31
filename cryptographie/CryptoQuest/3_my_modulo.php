<?php

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

/*
echo "Modulo PHP (117%17) : ".(117%17)."\n";
echo "Modulo PHP (-117%(-17)) : ".(-117%(-17))."\n";
echo "Modulo PHP (-117%17) : ".(-117%17)."\n";
echo "Modulo PHP (117%(-17)) : ".(117%(-17))."\n";
echo "\n";
echo "my_modulo (117%17) : ".my_modulo(117, 17)."\n";
echo "my_modulo (-117%-17) : ".my_modulo(-117, -17)."\n";
echo "my_modulo (-117%17) : ".my_modulo(-117, 17)."\n";
echo "my_modulo(117%(-17)) : ".my_modulo(117, -17)."\n";
*/