<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Raawrr</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <?php
    session_start();
    if($_SESSION['status']!="login"){
      header("location:login.php?msg=belum_login");
    }
    ?>

    <video autoplay loop muted style="position: fixed; top: 50%; left: 50%; min-width: 0%; min-height: 0%; width: 1700px; height: auto; transform: translate(-50%, -50%); z-index: -1;">
        <source src="pideo/gojocat.mp4" type="video/mp4">
    </video>
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
          <a class="navbar-brand" href="#">
            <img src="image/chest.png" style="width: 46px;" alt="Logo">
          </a>
          <ul class="navbar-nav col-lg-6 align-items-lg-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            </li>
          </ul>
          <div class="d-lg-flex ms-lg-auto">
            <a href="logout.php">
            <button class="btn btn-danger">Log Out</button>
            </a>
            
          </div>
        </div>
      </div>
    </nav>

    <div class="container mt-5 text-center">
      <h1 style="text-shadow: 2px 2px 2px #d3d3d3;">Selamat Datang di Peminjaman Barang UqqyAhmad!</h1>
      <br><br><br><br><br>
      <p>Masuk sebagai:</p>
      <a href="datapeminjaman.php">
        <button class="btn btn-primary mx-2" style="color: #f1ff32;">Administrator</button>
      </a>
      <a href="daftarbrg.php">
        <button class="btn btn-primary mx-2">Peminjam</button>
      </a>
      
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>