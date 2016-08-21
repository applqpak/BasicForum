<?php

  include "db/connect.php";

  if(isset($_GET["user"]) and isset($_GET["message"]))
  {

    $user = $conn->real_escape_string($_GET["user"]);

    $message = $conn->real_escape_string($_GET["message"]);

    $sql = "INSERT INTO forum (user, message, date) VALUES ('" . $user . "', '" . $message . "', NOW());";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $stmt->close();

    $conn->close();

  }

  header("Location: index.html");

?>
