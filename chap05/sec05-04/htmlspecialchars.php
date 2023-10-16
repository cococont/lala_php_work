<?php
$msg = "東京<->京都 'Eat & Run' ツアー";
// 東京&lt;-&gt;京都 &#039;Dat &amp; Run&#039; ツアー
$msg2 = "<script>alert('ウィルス発見')</script>";
// echo $msg2;
echo h($msg2);
// &lt;script&gt;alert(&#039;ウィルス発見&#039;)&lt;/script&gt;
// echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8');

function h($str) {
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}