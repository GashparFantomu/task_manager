<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Înregistrare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/registerCss.css">
</head>
<body>
  <div class="custom-register-box">
    <h2 class="text-center mb-4">Înregistrare</h2>
    <form method="POST" action="register_action.php">
      <div class="mb-3">
        <label for="username" class="form-label">Nume utilizator</label>
        <input type="text" class="form-control w-100" id="username" name="username" placeholder="Nume utilizator" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Parola</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Parola" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Înregistrează-te</button>
    </form>
  </div>
</body>
</html> 