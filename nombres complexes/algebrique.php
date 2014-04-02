<?php

function sum_complex($z1, $z2)
{
  $result[0] = $z1[0] + $z2[0];
  $result[1] = $z1[1] + $z2[1];
  return $result;
}

function prod_complex($z1, $z2)
{
  $result[0] = ($z1[0] * $z2[0]) - ($z1[1] * $z2[1]);
  $result[1] = ($z1[0] * $z2[1]) + ($z1[1] * $z2[0]);
  return $result;
}

function conj_complex($z)
{
  $result[0] = $z[0];
  $result[1] = -$z[1] ;
  return $result;
}
 
 function inv_complex($z)
{
  $result[0] = $z[0] / (($z[0] * $z[0]) + ($z[1] * $z[1]));
  $result[1] = -($z[1] / (($z[0] * $z[0]) + ($z[1] * $z[1])));
  return $result;
}

function div_complex($z1, $z2);
{
  if ($z2[0] == 0 && $z2[1] == 0) 
  {
    return (-1);
  }
  else 
  $diviseur = ($z2[0] * $z2[0]) - ($z2[1] * -$z2[1]);
  $result[0] = ((($z1[0] * $z2[0]) - ($z1[1] * -$z2[1])) / $diviseur);
  $result[1] = ((($z1[0] * -$z2[1]) + ($z1[1] * $z2[0])) / $diviseur);
  return $result;
}


sum_complex($z1,$z2);
prod_complex($z1, $z2);
conj_complex($z);
inv_complex($z);
div_complex($z1, $z2);

?>