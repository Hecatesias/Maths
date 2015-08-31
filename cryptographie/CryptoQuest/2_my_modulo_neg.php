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

/*
echo "Modulo PHP (117%17) : ".(117%17)."\n";
echo "Modulo PHP (-117%(-17)) : ".(-117%(-17))."\n";
echo "Modulo PHP (-117%17) : ".(-117%17)."\n";
echo "Modulo PHP (117%(-17)) : ".(117%(-17))."\n";
echo "\n";
echo "my_modulo (117%17) : ".my_modulo_neg(117, 17)."\n";
echo "my_modulo (-117%-17) : ".my_modulo_neg(-117, -17)."\n";
echo "my_modulo (-117%17) : ".my_modulo_neg(-117, 17)."\n";
echo "my_modulo(117%(-17)) : ".my_modulo_neg(117, -17)."\n";
*/