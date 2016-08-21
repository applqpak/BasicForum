<?php

  include "../resources/config.php";

  $conn = @new mysqli($config->host, $config->username, $config->password, $config->database);

  if($conn->connect_errno)
  {

    echo "Error occurred while trying to connect to the MySQL Server - " . $conn->connect_error;

    exit();

  }

?>
