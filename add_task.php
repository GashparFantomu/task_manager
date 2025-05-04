<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['list_id'], $_POST['title'])) {
    $list_id = $_POST['list_id'];
    $title = $_POST['title'];
    if (isset($_POST['description'])) {
        $description = $_POST['description'];
    } else {
        $description = '';
    }
    
    $stmt = $conn->prepare("INSERT INTO tasks (list_id, title, description) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $list_id, $title, $description);
    $stmt->execute();
    $stmt->close();

    
    $board_id_result = $conn->query("SELECT board_id FROM lists WHERE id = $list_id");
    $board = $board_id_result->fetch_assoc();
    $board_id = $board['board_id'];

    header("Location: board.php?id=" . $board_id);
    exit;
}
?>
