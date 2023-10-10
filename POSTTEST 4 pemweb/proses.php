<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nama = htmlspecialchars($_POST["nama"]);
    $lapangan = htmlspecialchars($_POST["lapangan"]);

    // Proses data (validasi atau pengolahan tambahan jika diperlukan)

    // Set hasil ke dalam variabel
    $hasil = "<h2>Hasil Pemesanan:</h2>";
    $hasil .= "<p><strong>Nama:</strong> $nama</p>";
    $hasil .= "<p><strong>Lapangan:</strong> $lapangan</p>";
} else {
    $hasil = "Tidak ada data yang dikirim.";
}
?>