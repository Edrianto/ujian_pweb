<?php
include '../koneksi.php';

$nama_produk = $_POST['nama_produk'];
$jumlah_produk = $_POST['jumlah_produk'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

mysqli_query($conn, "INSERT INTO table_pembelian VALUES('', '$nama_produk', '$jumlah_produk', '$alamat', '$no_telp')");

header("location: ../pages/input_data.php");
?>
