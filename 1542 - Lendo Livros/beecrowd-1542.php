<?php
while (1) {
  $input = readline();
  $input = explode(" ", $input);

  if ($input[0] == 0) {
    break;
  } else {
    $q = $input[0]; #pags lidas por dia
    $d = $input[1]; #dias economizados se ler pags por dia igual a P
    $p = $input[2];

    $a = ($q * $d); #mult entre "pags por dia" e "dias economizados" 48
    $b = ($p - $q); #sub entre "X pags por dia" e "dias economizados" 2

    $t = $a / $b; #divisao entre os resultados acima
    $paginas = $t * $p;
    $paginas = floor($paginas);

    if ($paginas == 1) {
      echo $paginas . " pagina\n";
    } else {
      echo $paginas . " paginas\n";
    }
  }
}
