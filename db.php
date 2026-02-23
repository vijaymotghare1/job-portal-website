<?php
$conn = new mysqli("localhost", "root", "", "hirebase");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>