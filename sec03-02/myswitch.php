<?php
$kuji = mt_rand(1, 6);
switch ($kuji) {
  case 1:
  case 2:
    echo "大吉";
    break;
  case 3:
    echo "吉";
    break;
  default:
    echo "凶";
    // break;
};