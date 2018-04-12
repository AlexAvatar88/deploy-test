<?php
  $payload = $_POST['payload'];
  echo $payload;
  exec('git pull origin master');
?>
