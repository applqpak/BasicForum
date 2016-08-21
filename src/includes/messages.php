<?php

  include "db/connect.php";

  $sql = "SELECT * FROM forum;";

  $stmt = $conn->prepare($sql);

  $stmt->execute();

  $result = $stmt->get_result();

  while($row = $result->fetch_assoc())
  {

    echo "<center>";

    echo "Posted by " . $row["user"] . " on " . $row["date"] . "<br />";

    echo $row["message"] . "<br />";

    echo "-----------------------<br />";

    echo "</center>";

  }

?>
