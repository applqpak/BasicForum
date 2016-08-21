<?php

  include "connect2.php";

  $sql = "TRUNCATE forum;";

  $stmt = $conn->prepare($sql);

  $stmt->execute();

  $stmt->close();

  $conn->close();

  echo "All entries have been deleted.";

?>
