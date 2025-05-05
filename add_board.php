<?php
require 'db.php';

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];  // ID-ul utilizatorului logat
    $board_name = $_POST['board_name'];

    // Inserarea board-ului în baza de date
    $stmt = $conn->prepare("INSERT INTO boards (user_id, board_name) VALUES (?, ?)");
    $stmt->bind_param("is", $user_id, $board_name);
    $stmt->execute();
    $stmt->close();

    // După ce board-ul a fost creat, poți redirecționa utilizatorul la dashboard
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaugă Board</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Adaugă Board</h2>
        <form action="add_board.php" method="POST">
            <div class="mb-3">
                <label for="board_name" class="form-label">Nume Board</label>
                <input type="text" class="form-control" id="board_name" name="board_name" required />
            </div>
            <button type="submit" class="btn btn-primary w-100">Adaugă Board</button>
        </form>
    </div>
</body>
</html>
