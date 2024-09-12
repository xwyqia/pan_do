<?php

// Include koneksi database
include('koneksi.php');

// Ambil data dari form
$id_user    = $_POST['id_user'];
$nama       = $_POST['nama'];
$kata_sandi = $_POST['kata_sandi'];

// Query untuk update data ke dalam database berdasarkan ID
$query = "UPDATE users SET nama = '$nama', kata_sandi = '$kata_sandi' WHERE id_user = $id_user";

// Kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    // Redirect ke halaman index.php 
    header("location: index.php");
} else {
    // Pesan error jika gagal update data
    echo "Data Gagal Diupdate!";
}

?>
