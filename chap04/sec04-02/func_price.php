<?php
function price($tanka, $kosu) {
  $souryo = 250;
  $ryokin = $tanka * $kosu;
  if ($ryokin < 5000) {
    $ryokin += $souryo;
  }
  return $ryokin;
}

$kakaku = price(1000, 3);
echo $kakaku . PHP_EOL;

$kingaku01 = price(2400, 2);
$kingaku02 = price(1200, 5);
echo "金額01: {$kingaku01}円<br>". PHP_EOL;
echo "金額02: {$kingaku02}円<br>". PHP_EOL;