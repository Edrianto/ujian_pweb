<?php
include '../koneksi.php';

$ID = $_POST['id'];
$nama_produk = $_POST['nama_produk'];
$jumlah_produk = $_POST['jumlah_produk'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

mysqli_query($conn, "UPDATE table_pembelian SET NAMA_PRODUK = '$nama_produk', JUMLAH_PRODUK='$jumlah_produk', ALAMAT='$alamat', NO_TELP='$no_telp' WHERE ID='$ID'");

header("location: ../pages/read_data.php");
?>