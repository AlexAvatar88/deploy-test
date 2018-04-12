<?php

  $payload = json_decode($_POST['payload'], true);
  $branch = substr($payload['ref'], strrpos($payload['ref'], '/'));
  echo $branch;
  exec('git pull origin master');
  
?>
