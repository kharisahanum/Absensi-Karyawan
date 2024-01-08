<?php

//panggil koneksi db
include "../halaman awal/koneksi.php";

//uji tombol ubah
if (isset($_POST['bubah'])) {

    //simpan ubah data
    $ubah = mysqli_query($koneksi, "UPDATE karyawan 
    SET id = '$_POST[id]', nama = '$_POST[nama]', divisi = '$_POST[divisi]'");
    
    //jika ubah berhasil
    if ($ubah) {
        echo "<script>
                alert('Ubah Data Sukses!');
                document.location='karyawan.php';
             </script>";
    } else {
        echo "<script>
                alert('Ubah Data Gagal!');
                document.location='karyawan.php';
             </script>";
    }
}