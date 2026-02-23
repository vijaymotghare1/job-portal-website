<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    echo "Job Uploaded Successfully";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Upload Job</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
<h2>Upload Job</h2>
<form method="post">
<input type="text" name="title" placeholder="Job Title" required>
<input type="text" name="company" placeholder="Company" required>
<input type="text" name="location" placeholder="Location" required>
<input type="text" name="salary" placeholder="Salary" required>
<button type="submit">Upload</button>
</form>
</div>

</body>
</html>