<?php
$kuji = mt_rand(1, 6);
$result = match($kuji) {
  1, 2 => "大吉",
  3 => "吉",
  default => "凶",
};

echo $result;