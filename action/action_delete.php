<?php 
include '../koneksi.php';

$ID = $_POST['id'];

mysqli_query($conn, "DELETE FROM table_pembelian WHERE ID = '$ID'");
header("location: ../pages/read_data.php");
?> 