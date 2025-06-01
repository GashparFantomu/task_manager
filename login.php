
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-image: url("assets/images/loginBG.jpg");
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
    <form method = "POST" action="login_post.php">
      <div class="mb-3">
        <label for="username" class="form-label">Nume utilizator</label>
        <input type="text" class="form-control" id="username" name="username" required/>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Parola</label>
        <input type="password" class="form-control" id="password" name="password" required/>
      </div>
      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
    <p class="mt-3 text-center">Nu ai cont? <a href="register.php">Inregistreaza-te</a></p>
  </div>
  
</body>
</html>

