<?php
$pattern = "/46-49/u";
$result1 = preg_match($pattern, "確か49-46でした");
$result2 = preg_match($pattern, "多分46-49でした");
$result3 = preg_match("/46-49u", "46-49かな？");

res($result1);
res($result2);
res($result3);

function res($result)
{
  if ($result) {
    echo "マッチしました。";
  } else {
    echo "マッチしません。";
  }
}

// if ($result2) {
//   echo "マッチしました。";
// } else {
//   echo "マッチしません。";
// }
// var_dump($aresult1); // int(0)
// var_dump($result2); // int(1)
// var_dump($result3); // bool(false)