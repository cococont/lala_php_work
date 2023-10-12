<?php
if (PHP_EOL === "\r\n") {
  echo "windows";
} else if (PHP_EOL === "\n") {
  echo "Mac, Unix";
} else {
  echo "other OS";
}
