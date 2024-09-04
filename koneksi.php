<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


$nama = $_POST['nama'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$email = $_POST['email'];
$saran = $_POST['saran'];


$stmt = $conn->prepare("INSERT INTO pesan (nama, nim, kelas, jenis_kelamin, email, saran) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sissss", $nama, $nim, $kelas, $jenis_kelamin, $email, $saran);


if ($stmt->execute()) {
    echo "Pesan sudah dikirim....";
} else {
    
    echo "Terjadi kesalahan: " . $stmt->error;
}


$stmt->close();
$conn->close();


?>
