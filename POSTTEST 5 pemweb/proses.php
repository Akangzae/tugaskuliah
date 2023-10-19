<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $lapangan = $_POST["lapangan"];

    // Di sini Anda dapat melakukan berbagai jenis validasi dan pemrosesan sesuai kebutuhan Anda.
    // Sebagai contoh, kita hanya akan mencetak data yang diterima.

    echo "Data yang dikirim:\n";
    echo "Nama: " . $nama . "\n";
    echo "Lapangan: " . $lapangan . "\n";
} else {
    // Redirect jika akses langsung ke file ini tanpa pengiriman formulir
    header("Location: index.html");
    exit();
}
?>