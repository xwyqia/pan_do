<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id           = $_POST['id_user'];
$nama          = $_POST['nama'];
$password       = $_POST['kata_sandi'];

//query insert data ke dalam database
$query = "INSERT INTO users (id_user, nama, kata_sandi ) VALUES ('$id', '$nama', '$password')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>