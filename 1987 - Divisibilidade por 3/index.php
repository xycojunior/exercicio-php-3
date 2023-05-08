<?php
while ($linha = fgets(STDIN)) {
  // Lê o número e converte para uma string
  $n = trim(fgets(STDIN));
  $m = strval(trim(fgets(STDIN)));
  
  // Calcula a soma dos algarismos
  $soma = 0;
  for ($i = 0; $i < $n; $i++) {
    $soma += intval($m[$i]);
  }
  
  // Verifica se a soma é divisível por 3
  if ($soma % 3 == 0) {
    echo $soma . " sim\n";
  } else {
    echo $soma . " nao\n";
  }
}
?>