<?php
function team($name, ...$members) {
  var_dump($name . PHP_EOL);
  echo implode("、", $members);
}

team("Peach", "佐藤", "田中", "加藤");