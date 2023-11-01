<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Rental Lapangan Futsal</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav id="navbar">
            <div class="logo">
                <!-- Logo perusahaan atau nama tempat rental -->
                <h1>Futsal Juned</h1>
            </div>
            <ul class="menu">
                <!-- Menu navigasi -->
                <li><a href="#pembuka">Home</a></li>
                <li><a href="#pesan">Lapangan</a></li>
                <li><a href="#isi">Pemesanan</a></li>
                <li><a href="#kontak">Kontak</a></li>
            </ul>
            <div class="theme-toggle">
                <label for="theme-switch">Dark Mode</label>
                <input type="checkbox" id="theme-switch">
            </div>
        </nav>
    </header>

    <section id="pembuka" class="landing">
        <!-- Konten landing page -->
        <h2>Sewa Rental Lapangan Futsal</h2>
        <p>Deskripsi singkat tentang tempat rental lapangan futsal</p>
        <button class="btn" id="pesanSekarangBtn">Pesan Sekarang</button>

        <!-- Pop-up -->
        <div class="popup-wrapper" id="pesanSekarangPopup">
            <div class="popup-dialog">
                <header class="popup-header">
                    <h3>Pesan Sekarang</h3>
                    <button class="close-btn" id="closePopupBtn">&times;</button>
                </header>
                <section class="popup-content">
                    <p>Sewa lapangan segera.</p>
                </section>
            </div>
        </div>
    </section>

    <section id="pesan" class="lapangan">
        <!-- Daftar lapangan yang tersedia -->
        <h2>Lapangan Tersedia</h2>
        <div class="lapangan-list">
            <!-- Daftar lapangan -->
            <div class="lapangan-item">
                <img src="gambar/lapangan1.png" alt="Lapangan 1">
                <h3>Lapangan 1</h3>
                <p>Deskripsi lapangan 1</p>
                <a href="#" class="btn">Lihat Detail</a>
            </div>
            <div class="lapangan-item">
                <img src="gambar/lapangan2.jpg" alt="Lapangan 2">
                <h3>Lapangan 2</h3>
                <p>Deskripsi lapangan 2</p>
                <a href="#" class="btn">Lihat Detail</a>
            </div>
            <!-- Tambahkan lebih banyak lapangan jika perlu -->
        </div>
    </section>

    <section id="isi" class="pemesanan">
        <!-- Formulir pemesanan -->
        <h2>Pemesanan Lapangan</h2>
        <form action="proses.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <!-- Tambahkan input lainnya seperti tanggal, waktu, dsb. -->

            <label for="lapangan">Pilih Lapangan:</label>
            <select id="lapangan" name="lapangan" required>
                <option value="">- Pilih Lapangan -</option>
                <option value="lapangan1">Lapangan 1</option>
                <option value="lapangan2">Lapangan 2</option>
            </select>

            <input type="submit" value="Submit" class="btn">
        </form>
    </section>

    <footer id="kontak">
        <!-- Informasi kontak dan tautan penting -->
        <div class="footer-content">
            <p>Alamat: Jl. Kadang kadang No. 123, Kota Samarinda</p>
            <p>Telepon: 08123456789</p>
            <p>Email: info@rentalfutsaljumadi.com</p>
        </div>
        <div class="footer-bottom">
            <p>Hak Cipta &copy; 2023 Sewa Rental Lapangan Futsal</p>
        </div>
    </footer>

    <script>
        const themeSwitch = document.getElementById('theme-switch');
        const elements = document.querySelectorAll('*');

        themeSwitch.addEventListener('change', function () {
            if (this.checked) {
                // Dark Mode
                for (let i = 0; i < elements.length; i++) {
                    elements[i].classList.add('dark-mode');
                }
            } else {
                // Light Mode
                for (let i = 0; i < elements.length; i++) {
                    elements[i].classList.remove('dark-mode');
                }
            }
        });


        const pesanSekarangBtn = document.getElementById('pesanSekarangBtn');
        const pesanSekarangPopup = document.getElementById('pesanSekarangPopup');
        const closePopupBtn = document.getElementById('closePopupBtn');

        pesanSekarangBtn.addEventListener('click', function () {
            // Tampilkan pop-up dan tambahkan class "popup-open" ke body tag
            pesanSekarangPopup.style.display = 'flex';
            document.body.classList.add('popup-open');
        });

        closePopupBtn.addEventListener('click', function () {
            // Sembunyikan pop-up dan hapus class "popup-open" dari body tag
            pesanSekarangPopup.style.display = 'none';
            document.body.classList.remove('popup-open');
        });

    </script>
</body>

</html>