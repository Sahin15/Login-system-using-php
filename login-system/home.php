<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html>
<head>
  <title>HOME</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Hello, <?php echo $_SESSION['name']; ?></h1><br>
  <a href="logout.php">LOGOUT</a>
</body>
</html>

<?php
}else{
  header("Location: index.php");
  exit();
}
?>