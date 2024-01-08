<?php
include_once("koneksi.php");
 
// Mengambil semua data dari database
$result = mysqli_query($koneksi, "SELECT * FROM karyawan_keluar");
 
if (isset($_POST['Submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $divisi = $_POST['divisi'];
 
    // Insert data ke database
    $add = mysqli_query($koneksi, "INSERT INTO karyawan_keluar(id, nama, divisi) VALUES('$id', '$nama', '$divisi')");
    
    if ($add) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>


<html>
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<div class="bg-success p-2 text-dark bg-opacity-10">
        <h1 class="p-4 text-center">Data Karyawan Keluar</h1>
        <div class="container">
            <form action="" method="post" name="form_absen">
                <div class="col-md-6 offset-md-3">
                    <div class="mb-3">
                        <label class="form-label">ID Karyawan</label>
                        <input type="text" class="form-control" name="id" placeholder="Masukkan ID Karyawan yang ingin dihapus">
                        <label class="form-label">Nama</label>
                             <input type="text" class="form-control" name="nama" placeholder="Masukkan nama Karyawan yang ingin dihapus">
                            <label class="form-label">Divisi</label>
                             <input type="text" class="form-control" name="divisi" placeholder="Masukkan divisi Karyawan yang ingin dihapus">
                    </div>
                 </div>
                 <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="Submit">Hapus</button>
                    <a href="view.php" class="btn btn-primary">Kembali</a>
                </div>
            </form>
            <div class="container">
        <table class="my-5 table table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Nama</th>
                <th>Divisi/Departemen</th>
            </tr>
            <?php
            while ($r = mysqli_fetch_array($result)) {
            ?>
            <tr class="table-secondary">
                <td><?php echo $r['id']; ?></td>
                <td><?php echo $r['nama']; ?></td>
                <td><?php echo $r['divisi']; ?></td>
            </tr>
            <?php
            }
            ?>
        </div>
</div>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>