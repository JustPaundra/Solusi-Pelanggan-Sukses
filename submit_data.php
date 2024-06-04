<?php
$servername = "localhost"; // Ganti jika server database Anda berbeda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "spk"; // Ganti dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari form
$pemesanan = $_POST['pemesanan'];
$sector = $_POST['sector'];
$tgl_berangkat = $_POST['tgl_berangkat'];
$waktu_transaksi = date("Y-m-d H:i:s"); // Menggunakan waktu saat ini
$status = 'pending'; // Set status awal sebagai 'pending'

// Buat query
$sql = "INSERT INTO tiket (pemesanan, sector, tgl_berangkat, status, waktu_transaksi) VALUES ('$pemesanan', '$sector', '$tgl_berangkat', '$status', '$waktu_transaksi')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// Redirect kembali ke halaman utama atau halaman lain
header("Location: index.php");
exit();
?>
