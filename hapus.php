<?php
// Include koneksi database
include('koneksi.php');

// Ambil ID dari parameter URL
$id_user = $_GET['id'];

// Query untuk menghapus data berdasarkan ID
$query = "DELETE FROM users WHERE id_user = $id_user";

// Kondisi pengecekan apakah data berhasil dihapus atau tidak
if($connection->query($query)) {
    // Redirect ke halaman index.php dengan pesan sukses
    header("location: index.php?pesan=sukses_hapus");
} else {
    // Redirect ke halaman index.php dengan pesan gagal
    header("location: index.php?pesan=gagal_hapus");
}
?>
