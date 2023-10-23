<?php
require_once('lib/util.php');
$name = $_POST['name'];
?>

<?php require_once('../common/header.php'); ?>
<p>名前:
<?php
echo h($name);
?>
</p>
<a class="return" href="nameForm.php">戻る</a>
<?php require_once('../common/footer.php'); ?>