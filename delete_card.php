<?php
require 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    $id = initval($_POST['id']);
    $stmt = $conn->prepare("DELETE FROM tasks WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}