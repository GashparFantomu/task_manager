<?php
require 'db.php';
session_start();
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$tasks = [
    'To Do' => [],
    'In progress' => [],
    'Done' => []
];
$sql1 = "SELECT id, task, status FROM tasks";
$result1 = $conn->query($sql1);
while ($row1 = $result1->fetch_assoc()) {
    $tasks[$row1['status']][] = $row1;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Board</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/dashboardStyle.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="dashboard.php">Task Manager</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1>Your Kanban Board</h1>
        <div class="board">
            <div class="list">
                <h3>To Do</h3>
                <div class="list-tasks">
                    <?php foreach($tasks['To Do'] as $task): ?>
                        <div class="task" data-id="<?= $task['id'] ?>">
                            <?= htmlspecialchars($task['task']) ?>
                            <button class="delete-card btn btn-danger btn-sm" style="float:right;">×</button>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="add-card">Add Card</button>

            </div>
                <div class="list">
                    <h3>In progress</h3>
                    <div class="list-tasks">
                        <?php foreach($tasks['In progress'] as $task): ?>
                            <div class= "task" data-id="<?= $task['id'] ?>">
                                <?= htmlspecialchars($task['task']) ?>
                                <button class="delete-card btn btn-danger btn-sm" style="float:right;">×</button>
                            </div>    
                        <?php endforeach; ?>
                    </div>
                <button class="add-card">Add Card</button>
            </div>
                <div class="list">
                    <h3>Done</h3>
                    <div class="list-tasks">
                        <?php foreach($tasks['Done'] as $task): ?>
                            <div class= "task" data-id="<?= $task['id'] ?>">
                                <?= htmlspecialchars($task['task']) ?>
                                <button class="delete-card btn btn-danger btn-sm" style="float:right;">×</button>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <button class="add-card">Add Card</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
    <script type="module" src="assets/script/dashboardScript.js"></script>
</body>
</html>