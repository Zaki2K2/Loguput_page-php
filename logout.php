
<?php
session_start(); // Start the session
session_destroy(); // Destroy the session data

header('location: login.php?status=logout_success'); // Redirect to login page with status parameter
exit(); // Ensure no further code is executed
?>


<!-- <?php
  session_start(); // Start the session
  session_destroy(); // Destroy the session data

  header('location: login.php'); // Redirect to login page
  exit(); // Ensure no further code is executed
?> -->