<?php
// Lê os valores de entrada
$a = (float) readline();
$b = (float) readline();
$c = (float) readline();

// Calcula o delta
$delta = ($b * $b) - (4 * $a * $c);

// Verifica se é possível calcular as raízes
if ($delta < 0 || $a == 0) {
    echo "Impossivel calcular\n";
} else {
    // Calcula as raízes
    $raiz1 = (-$b + sqrt($delta)) / (2 * $a);
    $raiz2 = (-$b - sqrt($delta)) / (2 * $a);

    // Imprime as raízes com 5 dígitos após o ponto
    printf("R1 = %.5f\n", $raiz1);
    printf("R2 = %.5f\n", $raiz2);
}
?>