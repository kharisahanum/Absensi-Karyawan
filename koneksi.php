<?php
$host ="localhost";
$user = "root";
$pass = "tiaraartamevia";
$db ="webproject";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (! $koneksi) {
    die("Gagal terkoneksi:");
}
?>