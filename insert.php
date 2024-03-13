<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Raawrr</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
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
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="insert.php">Insert</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="true">Data</a>
                      <ul class="dropdown-menu" data-bs-popper="static">
                        <li><a class="dropdown-item" href="databarang.php">Data Barang</a></li>
                        <li><a class="dropdown-item" href="datapeminjaman.php">Data Peminjaman</a></li>
                        <li><a class="dropdown-item" href="datauser.php">Data User</a></li>
                      </ul>
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

    <div class="container mt-5">
        <form action="simpan_barang.php" method="post">
            <div class="mb-3">
                <label for="namaBarang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="namaBarang">
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori">
            </div>
            <div class="mb-3">
                <label for="merk" class="form-label">Merk</label>
                <input type="text" class="form-control" id="merk">
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control" id="jumlah">
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
