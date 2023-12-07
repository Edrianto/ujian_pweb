<?php
$host = 'localhost';
$user = 'root';
$pwd = '';
$db_name = 'projek_akhir';

$conn = new mysqli($host, $user, $pwd, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
