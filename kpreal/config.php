<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "kpreal";
$db = mysqli_connect($server, $user, $password, $nama_database);

$conn = new mysqli($server, $user, $password, $nama_database);
// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

?>