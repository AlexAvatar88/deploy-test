<?php

  $deployBranch = 'deploy';
  $payload = json_decode($_POST['payload'], true);
  $branch = substr($payload['ref'], strrpos($payload['ref'], '/') + 1);

  if ($branch == $deployBranch){
    exec('git pull origin ' . $deployBranch);
    echo "Push en " . $deployBranch . " detectado. Pull realizado con exito.";
  }
  else {
    echo "Push en " . $branch . " detectado. No se realiza acción.";
  }

?>
