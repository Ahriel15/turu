<?php
  // Connect to database
  $conn = new mysqli("localhost", "root", "", "db_form");
  // Update consultation status
  $conn->query("UPDATE db_form SET status='Selesai' WHERE id=" . $_GET["id"]);
  header("Location: index.php");
?>
