<?php
include 'config.php';

// Ambil data dari formulir
$nama = $_POST['nama'];
$email = $_POST['email'];
$comment = $_POST['comment'];

// Simpan data ke database
$sql = "INSERT INTO feedback (nama, email, comment) VALUES ('$nama', '$email', '$comment')";
if ($conn->query($sql) === TRUE) {
    // Berhasil disimpan, berikan notifikasi alert
    echo "<script>alert('Data feedback berhasil disimpan'); window.location.href='index.html';</script>";
} else {
    // Gagal disimpan, berikan notifikasi alert dengan pesan error
    echo "<script>alert('Error: " . $sql . "\\n" . $conn->error . "'); window.location.href='index.html';</script>";
}

// Tutup koneksi
$conn->close();
?>