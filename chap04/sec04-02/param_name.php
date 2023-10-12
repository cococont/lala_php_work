<?php
function fee($adult=0, $child=0) {
  $adult_fee = 1000 * $adult;
  $chiled_fee = 600 * $child;
  $fee = $adult_fee + $chiled_fee;
  return $fee;
}

$total = fee(1, 2);
echo "大人一人、子供二人の料金";
echo "{$total}円";

$total2 = fee(child:2, adult:1);
echo "大人一人、子供二人の料金";
echo "{$total2}円";

$total3 = fee(child:2);
echo "子供二人の料金";
echo "{$total3}円";