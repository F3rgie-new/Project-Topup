<?php
$host = "localhost";
$user = "root";
$password = ""; // Jika default, biarkan kosong
$db = "simpangstore";

$conn = mysqli_connect($host, $user, $password, $db);

// Cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
