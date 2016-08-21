<?php

  include "connect2.php";

  $sql = "CREATE TABLE forum (

    user TEXT NOT NULL,

    message TEXT NOT NULL,

    date DATETIME NOT NULL

  );";

  $stmt = $conn->prepare($sql);

  $stmt->execute();

  $stmt->close();

  $conn->close();

  echo "Successfully created table forum.";

?>
