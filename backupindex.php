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
 
    <div class="bg-success p-2 text-dark bg-opacity-10">
        <h1 class="p-4 text-center">Catatan Kehadiran</h1>
        <div class="container">
            <form action="" method="post" name="form_absen">
                <div class="col-md-6 offset-md-3">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <select class="form-select" name="nama">
                            <option value="#">-- Pilih Nama Anda --</option>
                            <option value="Bunga">Bunga</option>
                            <option value="Citra">Citra</option>
                            <option value="Lestari">Lestari</option>
                            <option value="Ayu">Ayu</option>
                            <option value="Budi">Budi</option>
                            <option value="Reihan">Reihan</option>
                            <option value="Kei">Kei</option>
                            <option value="Dwiky">Dwiky</option>
                            <option value="Hanikun">Hanikun</option>
                            <option value="Luluk">Luluk</option>
                            <option value="Ikrana">Ikrana</option>
                            <option value="Hawa">Hawa</option>
                            <option value="Fazya">Fazya</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Divisi/Departemen</label>
                        <select class="form-select" name="divisi">
                            <option value="#">-- Pilih Departemen --</option>
                            <option value="Admin">Admin</option>
                            <option value="Finance">Finance</option>
                            <option value="Operation">Operation</option>
                            <option value="HRD">HRD</option>
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="Submit">Hadir</button>
                </div>
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="true" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">View</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Laporan</a>
                        </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">PT. Bintang Bersinar</h5>
                        <p class="card-text">Silahkan absensi tepat waktu</p>
                        <a href="#" class="btn btn-primary">Absensi</a>
                      </div>
                </div>
            </form>
 
            <table class="my-5 table table-striped">
                <tr class="table-dark">
                    <th>Nama</th>
                    <th>Divisi/Departemen</th>
                    <th>Waktu Kehadiran</th>
                </tr>
 
                <?php
                while ($r = mysqli_fetch_array($result)) {
                ?>
                    <tr class="table-secondary">
                        <td><?php echo $r['nama']; ?></td>
                        <td><?php echo $r['divisi']; ?></td>
                        <td><?php echo $r['waktu_kehadiran']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>