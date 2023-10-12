<?php
$member = [2, 4, 5];

$gokei = 0;
for ($i=0; $i<count($member); $i++) {
  $gokei += $member[$i];
}

function sum(...$num) {
  $sumValue = 0;
  for ($n=0; $n<count($num); $n++) {
    $sumValue += $num[$n];
  }
  return $sumValue;
}

echo sum(3, 4, 6, 8);