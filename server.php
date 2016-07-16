<?php

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
while (1) {
  $res = `head /dev/urandom | hexdump | head -n32`;


  $res = implode("\ndata:", explode(PHP_EOL, $res));


  echo "data: ";
  echo $res;
  echo "\n\n";
  ob_end_flush();
  flush();
  sleep(1);
}