<?php
$data = [
  "id" => "TR123",
  "商品名" => "ピークハンド",
  "価格" => 14500,
];

echo "<ul>";
foreach ($data as $key => $value) {
  echo "<li> $key : $value </li>";
}
echo "</ul>";