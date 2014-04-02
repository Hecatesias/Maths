<?php

function delta_polynomial($p)
{
  $result = (($p[1] * $p[1]) - (4 * $p[2] * $p[0]));
  return $result;
}

function root_polynomial($p)
{
 $delta = round(delta_polynomial($p), 2);
  if ($delta == 0)
  {
    echo "x1 = "-$p[1]/(2 * $p[2])."\n";
  }
  elseif ($delta > 0)
  {
    echo "x1 = ".(-$p[1]+sqrt($delta))/(2 * $p[2])."\n";
    echo "x2 = ".(-$p[1]-sqrt($delta))/(2 * $p[2])."\n";
  }
  elseif ($delta < 0)
  {
    echo "Delta est négatif, le polynome n'a pas de racines réelles \n"
  }
}

delta_polynomial($p)
root_polynomial($p)

?>