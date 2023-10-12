<?php
function charge($rank="", $days = 1) {
  switch ($rank) {
    case "A":
      $ryokin = 15000 * $days;
      break;
    case "B":
      $ryokin = 12000 * $days;
      break;
    default:
    $ryokin = 8000 * $days;
  }
  return $ryokin;
}

$kingaku1 = charge("B", 2);
$kingaku2 = charge("A");
echo "金額は{$kingaku1}円<br>" . PHP_EOL;
echo "金額は{$kingaku2}円<br>" . PHP_EOL;
echo charge(1,3);