<?php
session_start(); // Începe sesiunea
require 'db.php'; // Include conexiunea la baza de date

// Verifică dacă formularul a fost trimis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Verifică dacă utilizatorul există în baza de date
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Legătura rezultatelor
        $stmt->bind_result($user_id, $hashed_password);
        $stmt->fetch();

        // Verifică parola
        if (password_verify($password, $hashed_password)) {
            // Parola este corectă, setează sesiunea utilizatorului
            session_start();
            $_SESSION['user_id'] = $user_id;
            header("Location: dashboard.php");
            exit;
        } else {
            // Parola este greșită
            echo "Username sau parolă greșită!";
        }
    } else {
        // Utilizatorul nu există
        echo "Username sau parolă greșită!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-image: url("assets/images/login_bg.jpg");
      background-size: cover;
      background-position: center;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .login-box {
      background-color: rgba(255, 255, 255, 0.9);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 400px;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2 class="text-center mb-4">Autentificare</h2>
    <form action="login.php" method="POST">
      <div class="mb-3">
        <label for="username" class="form-label">Nume utilizator</label>
        <input type="text" class="form-control" id="username" name="username" required/>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Parolă</label>
        <input type="password" class="form-control" id="password" name="password" required/>
      </div>
      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
    <p class="mt-3 text-center">Nu ai cont? <a href="register.php">Înregistrează-te</a></p>
  </div>
  
</body>
</html>

