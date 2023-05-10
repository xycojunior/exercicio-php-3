<?php

#beecrowd | 2866

$inputs = readline();

for ($i = 0; $i < $inputs; $i++){
  $codificado = readline();
  $string = str_split($codificado);
  $var = preg_replace("/(?![a-z])./", "", $string);
  $var = implode($var);
  echo strrev($var)."\n";
}

?>