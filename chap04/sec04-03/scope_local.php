<?php
$kosu = 2;

function price($kosu) {
  $ryokin = 250 * $kosu;
  echo "{$ryokin}円です。";
}

echo "{$kosu}個で";
price(2);