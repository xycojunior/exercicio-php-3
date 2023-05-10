<?php

$testes = readline();

function fib($num)
{
  if ($num == 0) {
    return 0;
  } else if ($num == 1) {
    return 1;
  } else {
    return (fib($num - 1) + fib($num - 2));
  }
}

function calls($num)
{
  if ($num == 0 || $num == 1) {
    return 1;
  } else {
    return (calls($num - 1) + calls($num - 2) + 1);
  }
}

while ($testes != 0) {
  $num = readline();

  $result = fib($num);
  $calls = calls($num);
  $calls -= 1;
  echo "fib($num) = $calls calls = $result\n";
  $testes--;
}
