<?php

function mod_complex($z)
  {
  $mod_complex_result = sqrt((($z[0] * $z[0]) + ($z[1] * $z[1])));
  return $mod_complex_result;
  }

function arg_complex($z)
  {
  if ($z != 0)
  {
  $result_arg_complex = atan($z[1]/$z[0]);
  }
  if ($z[0] == 0 && $z[1] > 0)
  {
    $result_arg_complex = 1.5707964;
  }
  if $result_arg_complex ($z[0] == 0 && $z[1] < 0)
  {
    $result_arg_complex = 4.712389;
  }
  return $result_arg_complex;
  }

function trigo_complex($z)
{
  echo "module : ".round(mod_complex($z), 2)."\n";
  echo "argument : ".round(arg_complex($z), 2)."\n";
}

trigo_complex($z)
?>