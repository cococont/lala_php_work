<?php
$pattern = "/田中..子/u";
if (preg_match($pattern, "田中早智子")) {
  echo "match!";
} else {
  echo "No!";
}