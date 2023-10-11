<?php
$count = 0;
do {
  $count += 1;
  $a = mt_rand(1, 13);
  $b = mt_rand(1, 13);
  $c = mt_rand(1, 13);
  $abc = $a + $b + $c;
  if ($abc === 21) {
    break;
  }
} while (TRUE);
echo "{$count}回, {$a}, {$b}, {$c}";