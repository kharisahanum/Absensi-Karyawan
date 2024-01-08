<?php
include_once("koneksi.php");
 
// Mengambil semua data dari database
$result = mysqli_query($koneksi, "SELECT * FROM absensi ORDER BY id DESC");
 
if (isset($_POST['Submit'])) {
    $nama = $_POST['nama'];
    $divisi = $_POST['divisi'];
 
    // Insert data ke database
    $add = mysqli_query($koneksi, "INSERT INTO absensi(nama,divisi,waktu_kehadiran) VALUES('$nama','$divisi', NOW())");
}
?>
 
<html>
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
    <title>Website absensi</title>
</head>

 
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Beranda</span>
        </div>
    </nav>
                </div>
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="true" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="laporan.php">Laporan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view.php">View</a>
                        </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">PT. Bintang Bersinar</h5>
                        <p class="card-text">Silahkan absensi tepat waktu</p>
                        <a href="absensi.php" class="btn btn-primary">Absensi</a>
                      </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>