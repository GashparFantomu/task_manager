<?php
require 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

// Obține board-urile utilizatorului logat
$stmt = $conn->prepare("SELECT * FROM boards WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Afișează board-urile
    while ($row = $result->fetch_assoc()) {
        echo "<p>" . $row['board_name'] . "</p>";
    }
} else {
    echo "<p>Nu ai niciun board creat încă.</p>";
}

$stmt->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - TaskFlow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .list-column {
            min-width: 250px;
            background: #f8f9fa;
            padding: 1rem;
            border-radius: 10px;
            margin-right: 1rem;
        }
        .task-card {
            background: white;
            padding: 0.5rem;
            margin-bottom: 0.5rem;
            border-radius: 6px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container-fluid">
        <span class="navbar-brand">Dashboard - <?= htmlspecialchars($board['name']) ?></span>
        <a href="logout.php" class="btn btn-outline-light">Logout</a>
    </div>
</nav>

<div class="container-fluid d-flex flex-row">
    <?php while ($list = $listsResult->fetch_assoc()): ?>
        <div class="list-column">
            <h5><?= htmlspecialchars($list['title']) ?></h5>
            <?php
                // Preluăm task-urile pentru fiecare listă
                $tasksStmt = $conn->prepare("SELECT * FROM tasks WHERE list_id = ?");
                $tasksStmt->bind_param("i", $list['id']);
                $tasksStmt->execute();
                $tasksResult = $tasksStmt->get_result();
                while ($task = $tasksResult->fetch_assoc()):
            ?>
                <div class="task-card">
                    <strong><?= htmlspecialchars($task['title']) ?></strong>
                    <p><?= htmlspecialchars($task['description']) ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endwhile; ?>
</div>

</body>
</html>
