<?php

while (true) {
  $entrada = fgets(STDIN);
  if ($entrada === false) break;

  list($n, $r) = explode(" ", trim($entrada));
  $retorno = explode(" ", trim(fgets(STDIN)));

  $missao = array();
  for ($i = 1; $i <= $n; $i++) {
    if (!in_array($i, $retorno)) {
      $missao[] = $i;
    }
  }

  if (count($missao) == 0) {
    echo "*\n";
  } else {
    echo implode(" ", $missao) . "\n";
  }
}

?>