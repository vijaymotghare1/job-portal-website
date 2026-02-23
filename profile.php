<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php include("header.php"); ?>

<h2>Welcome <?php echo $_SESSION['user']; ?></h2>

</body>
</html>