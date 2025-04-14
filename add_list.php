<?php
require 'db.php';
if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['name'])){
    $board_id = $_POST['board_id'];
    $list_name = $_POST['list_name'];

    $stmt = $conn->prepare("INSERT INTO lists (board_id, name) VALUES (?, ?)");
    $stmt->bind_param("is", $board_id, $list_name);
    $stmt->execute();
    $stmt->close();
    
    header("Location: board.php?id=" . $board_id);
    exit;
   
}