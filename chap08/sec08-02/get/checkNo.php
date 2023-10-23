<?php require_once('../../common/header.php'); ?>
<?php
$no = $_GET['no'];
$nolist = [3, 5, 7, 8, 9];
if (in_array($no, $nolist)) {
  echo "{$no}はありました";
} else {
  echo "{$no}はありません";
}
?>
<a class="return" href="checkNoForm.php">戻る</a>
<?php require_once('../../common/footer.php'); ?>