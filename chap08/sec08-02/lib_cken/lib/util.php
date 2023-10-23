<?php
function cken(array|string $data): bool {
  if (phpversion() >= "7.2.0") {
    return mb_check_encoding($data);
  } else {
    if (is_array($data)) {
      return cken_old($data);
    } else {
      return mb_check_encoding($data);
    }
  }
}
// php7.2.0より前の記述 mb_check_encoding が文字列しか受け取れない時代
// $dataがUTF-8ならtrueそれ以外はfalse
function cken_old(array $data): bool {
  $result = true;
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $value = implode("", $value);
    }
    if (!mb_check_encoding($value)) {
      $result = false;
      break;
    }
  }
  return $result;
}