<?php
// Koneksi ke database

// Tangkap data yang dikirim melalui POST
// Query INSERT untuk menambahkan data baru ke tabel kategori

// Koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "crud");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

// Tangkap data yang dikirim melalui POST
$kategori = $_POST['kategori'];
$pendaftaran = $_POST['pendaftaran'];
$jamAwalPendaftaran = $_POST['jamAwalPendaftaran'];
$jamAkhirPendaftaran = $_POST['jamAkhirPendaftaran'];
$penyisihan = $_POST['penyisihan'];
$jamAwalPenyisihan = $_POST['jamAwalPenyisihan'];
$jamAkhirPenyisihan = $_POST['jamAkhirPenyisihan'];
$pengumuman = $_POST['pengumuman'];
$final = $_POST['final'];
// Query INSERT untuk menambahkan data baru ke tabel kategori
$query = "INSERT INTO kategori (kategori, pendaftaran, jamAwalPendaftaran, jamAkhirPendaftaran, penyisihan, jamAwalPenyisihan, jamAkhirPenyisihan, pengumuman, final)
VALUES ('$kategori', '$pendaftaran', '$jamAwalPendaftaran', '$jamAkhirPendaftaran', '$penyisihan', '$jamAwalPenyisihan', '$jamAkhirPenyisihan', '$pengumuman', '$final')";

if (mysqli_query($connection, $query)) {
    echo '<script>window.open("notification.php?message=Data added successfully","_blank","width=400,height=200")</script>';
} else {
    echo 'Error: ' . mysqli_error($connection);
}

mysqli_close($connection);