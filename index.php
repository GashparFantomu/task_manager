<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
      <style>
    .carousel-item img {
      height: 400px;
      object-fit: cover;
    }
  </style>
    <title>TaskFlow</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">TaskFlow</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="py-5 text-center text-white" style="background-image: url('assets/images/login_bg.jpg'); background-size: cover; background-position: center;">
  <div class="container">
    <h1 class="display-4 fw-bold">Bine ai venit la TaskFlow</h1>
    <p class="lead mb-4">Platforma ta pentru organizarea taskurilor rapid și eficient. Simplu, rapid, modern.</p>
    <a href="dashboard.php" class="btn btn-primary btn-lg">Incepe acum</a>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Crează Board-uri</h5>
            <p class="card-text">Organizează taskurile în proiecte diferite și păstrează totul structurat.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Adaugă liste și taskuri</h5>
            <p class="card-text">Folosește liste pentru a grupa taskuri și a urmări progresul ușor.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Actualizare ușoară</h5>
            <p class="card-text">Editează sau șterge taskurile în funcție de nevoile tale, fără bătăi de cap.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Carousel START -->
<div id="mainCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/test1.jpg" class="d-block w-100" alt="Imagine 1">
      <div class="carousel-caption d-none d-md-block">
        <h5>Organizează-ți taskurile</h5>
        <p>Totul la un loc, ușor de folosit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/test2.jpg" class="d-block w-100" alt="Imagine 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Colaborează cu echipa</h5>
        <p>Lucrează împreună, eficient și rapid.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/test3.jpg" class="d-block w-100" alt="Imagine 3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Monitorizează progresul</h5>
        <p>Vezi ce ai realizat și ce urmează.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel END -->


<footer class="bg-dark text-white mt-5 py-4">
  <div class="container text-center text-md-start">
    <div class="row">
      <!-- Col 1 -->
      <div class="col-md-3 mb-3">
        <h5>TaskFlow</h5>
        <p>Organizează-ți taskurile eficient și rapid.</p>
      </div>

      <!-- Col 2 -->
      <div class="col-md-3 mb-3">
        <h6>Linkuri utile</h6>
        <ul class="list-unstyled">
          <li><a href="https://scanstart.ro/" class="text-white text-decoration-none">scanstart.ro</a></li>
          <li><a href="http://csac.ulbsibiu.ro/" class="text-white text-decoration-none">csac.ro</a></li>
          <li><a href="https://github.com/GashparFantomu" target="_blank" class="text-white text-decoration-none">GitHub</a></li>
          <li><a href="https://www.instagram.com/cie.engineering_ulbs/?hl=en" class="text-white text-decoration-none">instagram ULBS</a></li>
        </ul>
      </div>

      <!-- Col 3 -->
      <div class="col-md-3 mb-3">
        <h6>Conectează-te</h6>
        <ul class="list-unstyled">
          <li><a href="login.php" class="text-white text-decoration-none">Autentificare</a></li>
          <li><a href="register.php" class="text-white text-decoration-none">Înregistrare</a></li>
        </ul>
      </div>

      <!-- Col 4 -->
      <div class="col-md-3 mb-3 text-md-end text-center">
        <p class="mb-0"> C incercuit 2025. Toate drepturile rezervate.</p><br>
        <p><a href="https://www.youtube.com/watch?v=x_QmvZRS85U">.</a></p> <!easterEgg>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>