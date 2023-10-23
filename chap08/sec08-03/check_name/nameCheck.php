<?php require_once('../../common/header.php'); ?>
<?php
  require_once("../../lib/util.php");
  // 文字エンコードの検証
  if (!cken($_POST)){
    // $encoding = mb_internal_encoding();
    $err = "Encoding Error! The expected encoding is UTF-8";
    // エラーメッセージを出して、以下のコードをすべてキャンセルする
    exit($err);
  }
  // HTMLエスケープ（XSS対策）
  $_POST = es($_POST);
?>

<?php
  // エラーフラグ
  $isError = false;
  // 名前を取り出す
  if (isset($_POST['name'])){
    $name = trim($_POST['name']);
    if ($name===""){
      // 空白のときエラー
      $isError = true;
    }
  } else {
    // 未設定のときエラー
    $isError = true;
  }
?>

<?php if ($isError): ?>
  <!-- エラーがあったとき -->
  <span class="error">名前を入力してください。</span>
  <form method="POST" action="nameCheckForm.php">
    <input type="submit" value="戻る">
  </form>
<?php else: ?>
  <!-- エラーがなかったとき -->
  <span>
  こんにちは、<?php echo $name; ?>さん。
  </span>
<?php endif; ?>
<?php require_once('../../common/footer.php'); ?>