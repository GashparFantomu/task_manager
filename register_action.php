<?php
require 'db.php'; 


$username = trim($_POST['username']);
$password = trim($_POST['password']);
    
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $hashed_password);
$stmt->execute();
$stmt->close();
    
header("Location: login.php");
exit;

?>
