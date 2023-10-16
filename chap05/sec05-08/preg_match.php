<?php
$pattern = "/^佐.+子/mu";
$subject = <<< "names"
佐藤有紀
塩田智子
佐藤ゆう子
杉山香
names;
// マッチテスト
$result = preg_match($pattern, $subject, $matches);
// 実行結果をチェックする
if ($result === false) {
  echo "エラー：", preg_last_error();
} else if ($result == 0){
  echo "マッチした値はありません。";
} else {
  echo "「", $matches[0], "」が見つかりました。";
}