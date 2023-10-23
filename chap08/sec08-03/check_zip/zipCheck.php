<?php
function getZiFromPost(&$errors) {
  $zip = "";
  if (isset($_POST['zip'])) {
    $zip = trim($_POST['zip']);
    $pattern = "/^[0-9]{3}-[0-9]{4}$/";
    if (!preg_match($pattern, $zip)) {
      $errors[] = "郵便番号を正しく入力してください";
    }
  } else {
    $errors[] = "郵便番号を正しく入力してください";
  }
  return $zip;
}
?>

<?php require_once('../../common/header.php'); ?>
<?php
  require_once("../../lib/util.php");
  // 文字エンコードの検証
  if (!cken($_POST)){
    $encoding = mb_internal_encoding();
    $err = "Encoding Error! The expected encoding is " . $encoding ;
    // エラーメッセージを出して、以下のコードをすべてキャンセルする
    exit($err);
  }
  // HTMLエスケープ（XSS対策）
  $_POST = es($_POST);
?>

<?php
  // エラーメッセージを入れる配列
  $errors = [];
  if(isset($_POST['zip'])){
    // 郵便番号を取り出す
    $zip = trim($_POST['zip']);
    // 郵便番号のパターン
    $pattern = "/^[0-9]{3}-[0-9]{4}$/";
    if (!preg_match($pattern, $zip)){
      // 郵便番号の形式になっていない
      $errors[] ="郵便番号を正しく入力してください。";
    }
  } else {
    // 未設定エラー
    $errors[] ="郵便番号を正しく入力してください。";
  }
?>

<?php
if (count($errors)>0){
  //エラーがあったとき
  echo '<ol class="error">';
  foreach ($errors as $value) {
    echo "<li>", $value , "</li>";
  }
  echo "</ol>";
} else {
  // エラーがなかったとき
  echo "郵便番号は{$zip}です。";
}
?>

<!-- 戻りボタンのフォーム -->
  <form method="POST" action="zipCheckForm.php">
    <ul>
      <li><input type="submit" value="戻る"></li>
    </ul>
  </form>
  <?php require_once('../../common/footer.php'); ?>