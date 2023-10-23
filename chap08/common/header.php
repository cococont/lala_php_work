<?php
if (!isset($h1)) {
  $h1 = 'PHP';
}
$cssdir = "http://{$_SERVER['SERVER_NAME']}/chap08/css";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>フォーム入力の値で計算する</title>
  <link href="<?= $cssdir ?>/style.css" rel="stylesheet">
</head>
<body>
  <header>
    <h1>
      <?php echo $h1 ?>
    </h1>
  </header>
<div>