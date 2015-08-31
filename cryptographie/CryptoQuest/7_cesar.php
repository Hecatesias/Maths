<?php

function my_modulo($int, $n) 
{
	return ($int - $n * ((int)($int / $n)));
}

function toASCII( $str )
{
    return strtr(utf8_decode($str), 
        utf8_decode(
        'ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ'),
        'SOZsozYYuAAAAAAACEEEEIIIIDNOOOOOOUUUUYsaaaaaaaceeeeiiiionoooooouuuuyy');
}

function cesar($str, $n, $flag) 
{
	$str = toASCII($str);
	$retour = "";

	if($flag == 0) //dechiffrement
	{ 
		$n = 26 - $n;
	} 
	else if ($flag  != 1) 
	{
		echo "va t'acheter des doigts !\n";
		return -1;
	}
	//dechiffrement
	foreach (str_split($str) as $value) 
	{
		if(ctype_alpha($value)) 
		{
			if(ctype_upper($value)) 
			{
				$retour .= chr(my_modulo((ord($value) - ord("A") + $n), 26) + ord("A"));
			} 
			else 
			{
				$retour .= chr(my_modulo((ord($value) - ord("a") + $n), 26) + ord("a"));
			}
		} 
		else 
		{
			$retour .= $value;
		}
	}
	return $retour;
}
//echo "Cesar Test : ".cesar("Bdrzq Sdrs",1,1)."\n"; 
