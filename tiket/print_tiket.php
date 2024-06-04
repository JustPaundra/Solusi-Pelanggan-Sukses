<?php
require_once '../vendor/autoload.php';

use Dompdf\Dompdf;

// Koneksi ke database
$servername = "localhost";
$username = "root"; // Sesuaikan dengan username database Anda
$password = ""; // Sesuaikan dengan password database Anda
$dbname = "spk";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT * FROM tiket";
$result = $conn->query($sql);

// Membuat objek Dompdf
$dompdf = new Dompdf();

// Mengatur HTML yang akan dicetak
$html = "<html><body>";
$html .= "<h1>Daftar Tiket</h1>";
$html .= "<table border='1' cellspacing='0' cellpadding='10'>";
$html .= "<thead>";
$html .= "<tr>";
$html .= "<th>ID Tiket</th>";
$html .= "<th>Pemesan</th>";
$html .= "<th>Sektor</th>";
$html .= "<th>Tanggal Berangkat</th>";
$html .= "<th>Waktu Transaksi</th>";
$html .= "</tr>";
$html .= "</thead>";
$html .= "<tbody>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $html .= "<tr>";
        $html .= "<td>" . htmlspecialchars($row["id_tiket"]) . "</td>";
        $html .= "<td>" . htmlspecialchars($row["pemesanan"]) . "</td>"; // Perbaikan nama kolom
        $html .= "<td>" . htmlspecialchars($row["sector"]) . "</td>"; // Perbaikan nama kolom
        $html .= "<td>" . htmlspecialchars($row["tgl_berangkat"]) . "</td>"; // Perbaikan nama kolom
        $html .= "<td>" . htmlspecialchars($row["waktu_transaksi"]) . "</td>";
        $html .= "</tr>";
    }
} else {
    $html .= "<tr><td colspan='5'>Tidak ada data</td></tr>";
}

$html .= "</tbody>";
$html .= "</table>";
$html .= "</body></html>";

// Memasukkan HTML ke Dompdf
$dompdf->loadHtml($html);

// Mengatur ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'landscape');

// Render PDF
$dompdf->render();

// Output PDF ke browser
$dompdf->stream("daftar_tiket.pdf", array("Attachment" => false));

// Tutup koneksi database
$conn->close();
?>
