<?php
$SC = array(1,2,5,10,50,100,200);
$SCP = $SC;
$clef_pub = array();
$m = 512;
$e = 255;
$taille = 6;
$Crypt;
$txt = "PREPETNA";

function inv_mod($a, $n){
	$a = abs($a);
	$n = abs($n);
	if($a != 0 || $n != 0) {
		for($i = 1; $i < $n; $i++) {
			if(my_modulo($i*$a, $n) == 1) {
				return $i;
			}
		}
	}
	return 0;
}

function my_modulo($int, $n) {
	$reste = ($int - $n * ((int)($int / $n)));
	return $reste;
}

function text2bin($string) {
	global $taille;
	$bin = "";
	for($i=0; $i<strlen($string); $i++) {
		if( ($c = ord($string{$i})) != 0) $bin .= str_pad(decbin($c) , 8, "0", STR_PAD_LEFT);
	}
	$bin = wordwrap($bin, $taille, ':', TRUE);
	$temp = explode(':', $bin);
	$temp[count($temp)-1] =  str_pad($temp[count($temp)-1], $taille, "0", STR_PAD_RIGHT);
	return $temp;
}

function bin2text($binstr) {
	$bin = explode(":", $binstr);
	$txt = "";
	for($i=0; $i<count($bin); $i++) {
		if (strlen($bin[$i]) == 8) {
			$txt .= chr(bindec($bin[$i]));
		}
	}
	return $txt;
}

function clefpub() {
	global $SC;
	global $SCP;
	global $clef_pub;
	global $m;
	global $e;

	foreach ($SC as $a) {
		$clef_pub[] = my_modulo($a*$e, $m);
	}
	for ($i=0; $i < count($clef_pub)-1; $i++) {
		if ($clef_pub[$i] > $clef_pub[$i+1]) {
			$temp = $clef_pub[$i];
			$clef_pub[$i] = $clef_pub[$i+1];
			$clef_pub[$i+1] = $temp;

			$temp1 = $SCP[$i];
			$SCP[$i] = $SCP[$i+1];
			$SCP[$i+1] = $temp1;
			$i = -1;
		}
	}
	echo "Clef Publique : " . implode(",", $clef_pub)."\n";
}

function chiffrement() {
	global $clef_pub;
	global $taille;
	global $txt;
	$txtbin = text2bin($txt, $taille);
	$crypt = array();
	foreach ($txtbin as $value) {
		$value = strrev($value);
		$temp = 0;
		for ($i = 0; $i < strlen($value); $i++)
		{
			if($value[$i] == 1)
			{
				$temp += $clef_pub[$i];
			}
		}
		$crypt[] = $temp;
	}
	global $Crypt;
	$Crypt = $crypt;
	echo "Message crypte : " . implode(",", $crypt)."\n";
}

function dechiffrement() {
	global $SCP;
	global $SC;
	global $m;
	global $e;
	global $taille;
	$return = '';
	$inv_mod = inv_mod($e, $m);
	$txtbin = '';
	global $Crypt;
	$tab = $Crypt;
	foreach ($tab as $value) {
		$temp = my_modulo($value * $inv_mod, $m);
		$temp2 = array();
		$bin = '';
		for ($i = count($SC)-1; $i >= 0; $i--) {
			if ($SC[$i] <= $temp) {
				$temp2[] = $SC[$i];
				$temp -= $SC[$i];
			}
		}
		for ($j = $taille-1; $j >= 0; $j--) {
			if(in_array($SCP[$j], $temp2))
				$bin .= 1;
			else
				$bin .= 0;
		}
		$txtbin .= $bin;
	}
	$textbin2 = wordwrap($txtbin, 8, ':', TRUE);
	echo "Message decrypte : " . bin2text($textbin2)."\n";
}

function get_number() {
	global $m;
	global $e;
	$bool = false;
	while ($bool == false)
	{
		echo "entrez m : ";
		$mtemp = readline("> ");
		echo "entrez e :";
		$etemp = readline("> ");
		if(intval($mtemp) && intval($etemp) && inv_mod(intval($etemp), intval($mtemp)) != 0) {
			$e = $etemp;
			$m = $mtemp;
			$bool = true;
		} else {
			echo $etemp . " et ". $mtemp . " ne sont pas des chiffres ou n'ont pas d'inversaire modulaire.\n";
		}
	}
}
function get_suite() {
	global $taille;
	global $SC;
	global $SCP;
	$bool = false;
	while ($bool == false)
	{
		echo "entrez la taille des blocs : \n";
		$str = readline("> ");
		if(intval($str)) {
			$taille = intval($str);
			echo "entrez la suite super croissante de la forme : '1,2,5...' : \n";
			$str = readline("> ");
			$tab = explode(",", $str);
			if(count($tab) <= $taille) {
				echo "la suite contient moins d'items que la taille des blocs\n";
			} else {
				$temp = 0;
				$temps = true;
				for($i = 0; $i < count($tab)-1;$i++){
					if($temp < $tab[$i])
						$temp += $tab[$i];
					else
						$temps = false;
				}
				if ($temps) {
					$SCP = $tab;
					$bool = true;
				} else {
					echo "La suite n'est pas super croissante\n";
				}
			}
		} else {
			echo $str . " n'est pas un chiffre\n";
		}
	}
	$SCP = $SC;
}

function change_params(){
	global $txt;
	get_number();
	get_suite();
	echo "entrez le texte a decrypter : ";
	$str = readline("> ");
	$txt = $str;
}

function aff_params() {
	global $SC;
	global $m;
	global $e;
	global $taille;
	global $txt;
	echo "m = $m, e = $e, taille du bloc = $taille, le texte est : '$txt' et la suite supercroissante est : ". implode(",", $SC)."\n";
}

function main()
{
	echo "Entrez 1 pour changer les parametres, 2 pour lancer le cryptage, 3 pour voir les parametres existant et exit pour quitter le programme\n";
	aff_params();
	while (($str = readline("> ")) != "exit")
	{
		if(intval($str) == 1) {
			change_params();
		} elseif(intval($str) == 2) {
			clefpub();
			echo dechiffrement(chiffrement());
		} elseif(intval($str) == 3) {
			aff_params();
		}else {
			echo $str." n'existe pas\n Entrez 1 pour changer les parametres, 2 pour lancer le cryptage et exit pour quitter le programme\n";
		}
	}
}

main();