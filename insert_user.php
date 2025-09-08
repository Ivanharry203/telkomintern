<?php
$koneksi = new mysqli("localhost", "root", "", "db_android");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (nama, email) VALUES ('$nama', '$email')";
    if ($koneksi->query($sql)) {
        echo "Sukses";
    } else {
        echo "Gagal";
    }
}
?>
