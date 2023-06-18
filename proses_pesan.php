<!DOCTYPE html>
<html>

<head>
    <title>Kedai Kopi Paste - Proses Pesan</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/proses_pesan.css">
</head>

<body>
    <?php include 'partials/header.php'; ?>

    <div class="main-container">
        <div class="container">
            <h1>Pesanan Diterima</h1>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nama = $_POST["nama"];
                $kopis = $_POST["kopi"];
                $jumlahs = $_POST["jumlah"];

                // Daftar harga untuk setiap jenis kopi
                $hargaKopi = array(
                    "Kopi Hitam" => 10000,
                    "Cappuccino" => 15000,
                    "Espresso" => 12000
                );

                if (!empty($nama) && !empty($kopis) && !empty($jumlahs)) {
                    echo "<p>Terima kasih, $nama!</p>";
                    echo "<p>Berikut adalah pesanan Anda:</p>";

                    $totalHarga = 0;

                    echo "<ul>";
                    for ($i = 0; $i < count($kopis); $i++) {
                        $kopi = $kopis[$i];
                        $jumlah = $jumlahs[$i];
                        $harga = $hargaKopi[$kopi];
                        $subtotal = $harga * $jumlah;

                        echo "<li>$jumlah x $kopi - Rp $subtotal</li>";

                        $totalHarga += $subtotal;
                    }
                    echo "</ul>";

                    echo "<p>Total Harga: Rp $totalHarga</p>";
                } else {
                    echo "<p>Mohon isi semua informasi dengan benar.</p>";
                }
            }
            ?>

            <div class="back-btn">
                <a href="pesan.php">Kembali ke Halaman Pemesanan</a>
            </div>
        </div>
    </div>

    <?php include 'partials/footer.php'; ?>
</body>

</html>