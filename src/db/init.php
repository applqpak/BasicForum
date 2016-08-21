<?php

  include "connect2.php";

  $sql = "CREATE TABLE forum (

    user TEXT NOT NULL,

    message TEXT NOT NULL,

    date DATETIME NOT NULL

  );";

?>
