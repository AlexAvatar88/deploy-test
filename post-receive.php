<?php
  $payload = json_decode($_POST['payload'], true);
  echo $payload;
  echo $payload['ref'];
  exec('git pull origin master');
?>
