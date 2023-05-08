<?php
// Lê os seis números da aposta e os seis números sorteados
$aposta = explode(" ", readline());
$sorteados = explode(" ", readline());

// Conta quantos números acertou
$numerosAcertados = count(array_intersect($aposta, $sorteados));

// Imprime o resultado
if ($numerosAcertados < 3) {
  echo "azar\n";
} elseif ($numerosAcertados == 3) {
  echo "terno\n";
} elseif ($numerosAcertados == 4) {
  echo "quadra\n";
} elseif ($numerosAcertados == 5) {
  echo "quina\n";
} else {
  echo "sena\n";
}
?>