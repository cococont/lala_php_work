<?php require_once('../../common/header.php'); ?>
<?php
  // フォーム入力の値を得る（単価と個数）
  $tanka = $_POST["tanka"];
  var_dump($tanka);
  $kosu = $_POST["kosu"];
  var_dump($kosu);
  // 計算する
  $price = $tanka * $kosu;
  // 表示する（３桁位取り）
  $tanka = number_format($tanka);
  $price = number_format($price);
  echo "単価{$tanka}円 × {$kosu}個 は {$price}円です。"
?>
<?php require_once('../../common/footer.php'); ?>