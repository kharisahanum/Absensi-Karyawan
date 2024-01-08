<?php
include_once("koneksi.php");

$result = mysqli_query($koneksi, "SELECT * FROM karyawan ORDER BY id ASC");

if (isset($_POST['Submit'])) {
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $divisi = isset($_POST['divisi']) ? $_POST['divisi'] : '';
  

    // Insert data ke database
    $add = mysqli_query($koneksi, "INSERT INTO karyawan(nama, divisi) VALUES('$nama', '$divisi')");
}
?>

<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Website absensi</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Data Karyawan</span>
        </div>
    </nav>

    <form method="post">
        <div class="text-center my-3">
            <button><a class="btn btn-primary" href="add.php">Update</a></button>
            <a href="delete.php" class="btn btn-primary">delete</a>
            <a href="index.php" class="btn btn-primary">Kembali</a>
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
        </table>
    </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
