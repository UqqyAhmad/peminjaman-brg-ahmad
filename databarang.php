<?php
require_once("database.php");
$tampil = mysqli_query($dbconnect,"Select * from barang");
$nomor=0;
// var_dump($tampil);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Raawrr</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11"
                aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            aria-expanded="true">Data</a>
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
    <br>
    <h2 style="margin-left: 15px;">Data Barang</h2>
    <br>
    <a style="margin-left: 9px;" href="insert.php">
        <button class="btn btn-primary mx-2">Tambah Barang</button>
    </a>
    <br><br>
    <center>
        <table border="2" cellspacing="0" cellpadding="5" style="width:92%">
            <tr>
            <th scope="col">No</th>
                <th scope="col">ID</th>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Kategori</th>
                <th scope="col">Merk</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Aksi</th>
            </tr>
            <?php foreach ($tampil as $data) : ?>
          <?php $nomor++; ?>
            <tr>
            <th scope="row"><?php echo "$nomor"; ?></th>
                <td>1</td>
                <td>69696969</td>
                <td>Sepeda Santuy</td>
                <td>Ga bisa dimakan</td>
                <td>Uqqy</td>
                <td>3</td>
                <td><?php echo"<a href='edit.php?id=$data[id]'>Edit</a> |
          <a href='javascript:hapusData(".$data['id'].")'>Hapus</a>"; ?> </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </center>
    <script language="javascript" type="text/JavaScript">
    function hapusData(id){
      if(confirm("Apakah anda yakin akan menghapus data ini ?")){
        window.location.href ='delete.php?id=' + id;
      }
    }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>