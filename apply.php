<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['name'];
    move_uploaded_file($_FILES['resume']['tmp_name'], "uploads/".$_FILES['resume']['name']);
    echo "Application Submitted Successfully";
}
?>
<!DOCTYPE html>
<html>
<head>
    <?php include("header.php"); ?>
<title>Apply Job</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
<h2>Apply for Job</h2>
<form method="post" enctype="multipart/form-data">
<input type="text" name="name" placeholder="Your Name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="text" name="phone" placeholder="Phone" required>
<input type="file" name="resume" required>
<button type="submit">Apply</button>
</form>
</div>

</body>
</html>