<?php

function aff_complex($z)
{
  if($z[0] == 0 && $z[1] == 0)
    echo "0";
  if($z[0] != 0)
    echo round($z[0],2).($z[1] != 0 ? " " : "");
  if($z[1] != 0)
    {
      echo ($z[1] < 0 ? "- " : ($z[0] != 0 ? "+ " : ""));
      echo (abs($z[1]) == 1 ? "" : round(abs($z[1]),2))."i";
    }
  echo "\n";
}

$z[0] = 3;
$z[1] = 4;

aff_complex($z);

?>