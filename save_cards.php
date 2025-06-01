<?php
require 'db.php';

$task = trim($_POST['task']);
$status = trim($_POST['status']);
$user_id = $_SESSION['user_id'];

$stmt = $conn->prepare("INSERT INTO tasks (task, status, user_id) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $task, $status, $user_id);
$stmt->execute();
$stmt->close();

header("Location: dashboard.php");
exit();
?>