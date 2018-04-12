<?php

  $payload = json_decode($_POST['payload'], true);
  $branch = substr($payload['ref'], strrpos($payload['ref'], '/') + 1);

  if ($branch == 'master'){
    exec('git pull origin master');
    echo "Push en master detectado. Pull realizado con exito.";
  }
  else {
    echo "Push en " . $branch . " detectado. No se realiza acción.";
  }

?>
