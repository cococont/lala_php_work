<?php
// 税金
// $tax = 0.1;
const TAX = 0.1;

// 料金を計算する
function taxPrice($tanka, $kosu){
  // global $tax;
  // $ryoukin = $tanka * $kosu * (1+$tax);
  $ryoukin = $tanka * $kosu * (1+TAX);
  echo "{$ryoukin}円です。";
}
// 実行する
taxPrice(tanka:250, kosu:4);
// echo "税込み" . $tax*100 , "%";
echo "税込み" . TAX*100 , "%";
?>