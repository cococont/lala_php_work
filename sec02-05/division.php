<?php
$a = 13;
$b = 0;
try {
  $e = intdiv($a, $b);
  echo $e;
} catch (DivisionByZeroError $e) {
  echo "無理";
}

// $c = $a / $b;
// $d = intdiv($a, $b);

// echo $c;
// echo $d;