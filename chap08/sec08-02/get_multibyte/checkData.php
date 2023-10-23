<?php require_once('../../common/header.php'); ?>
<?php
$data = $_GET["data"];
$data = rawurldecode($data);
$data = htmlspecialchars($data, ENT_QUOTES, "UTF-8");
echo "「{$data}」を受け取りました";
?>
<a class="return" href="getRequest.php">戻る</a>
<?php require_once('../../common/footer.php'); ?>