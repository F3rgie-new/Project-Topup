<?php

$host =  "localhost";
$user = "root";
$password = "";
$db = "simpangstore";

$conn = mysqli_connect($host, $user, $password, $db);
if (!$conn){
    die("koneksi gagal terhubung". mysqli_connect_error());
}
 


?>