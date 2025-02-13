<?php
session_start();

if (!isset($_SESSION['email'])) {
  header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
</head>

<body>
  Name : <?php echo $_SESSION['name']; ?>
  Username : <?php echo $_SESSION['username']; ?>
  Email: <?php echo $_SESSION['email']; ?>
  <a href="backend/logout.php">Logout</a>
</body>

</html>