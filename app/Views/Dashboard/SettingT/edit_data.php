<?php
// Koneksi ke database

// Tangkap data yang dikirim melalui POST
// Query UPDATE untuk mengubah data kategori berdasarkan ID

// Koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "crud");

// Check connection
if (mysqli_connect_errno()) {
  echo "Koneksi database gagal : " . mysqli_connect_error();
}

// Tangkap data yang dikirim melalui POST
$id = $_POST['editId'];
$kategori = $_POST['kategori'];
$pendaftaran = $_POST['pendaftaran'];
$jamAwalPendaftaran = $_POST['jamAwalPendaftaran'];
$jamAkhirPendaftaran = $_POST['jamAkhirPendaftaran'];
$penyisihan = $_POST['penyisihan'];
$jamAwalPenyisihan = $_POST['jamAwalPenyisihan'];
$jamAkhirPenyisihan = $_POST['jamAkhirPenyisihan'];
$pengumuman = $_POST['pengumuman'];
$final = $_POST['final'];

// Query UPDATE untuk mengubah data kategori berdasarkan ID
$query = "UPDATE kategori SET kategori = '$kategori', pendaftaran = '$pendaftaran', jamAwalPendaftaran = '$jamAwalPendaftaran', jamAkhirPendaftaran = '$jamAkhirPendaftaran', penyisihan = '$penyisihan', jamAwalPenyisihan = '$jamAwalPenyisihan', jamAkhirPenyisihan = '$jamAkhirPenyisihan', pengumuman = '$pengumuman', final = '$final' WHERE id = '$id'";

if (mysqli_query($connection, $query)) {
  echo 'Data updated successfully';
} else {
  echo 'Error: ' . mysqli_error($connection);
}

mysqli_close($connection);