<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $_SESSION['user'] = $_POST['email'];
    header("Location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login - HireNest</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
<h2>Login</h2>
<form method="post">
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit">Login</button>
</form>
</div>
</body>
</html>