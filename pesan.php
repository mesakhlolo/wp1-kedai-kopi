<!DOCTYPE html>
<html>

<head>
    <title>Kedai Kopi Paste - Pesan</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pesan.css">
</head>

<body>
    <?php include 'partials/header.php'; ?>

    <div class="main-container">
        <div class="form-container">
            <h1>Pesan Kopi</h1>

            <form method="post" action="proses_pesan.php">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>

                <div class="kopi-inputs" id="kopi-inputs-container">
                    <template id="kopi-input-template">
                        <label for="kopi[]">Jenis Kopi:</label>
                        <select name="kopi[]" required>
                            <option value="">Pilih Jenis Kopi</option>
                            <option value="Kopi Hitam">Kopi Hitam - Rp 10,000</option>
                            <option value="Cappuccino">Cappuccino - Rp 15,000</option>
                            <option value="Espresso">Espresso - Rp 12,000</option>
                        </select>

                        <label for="jumlah[]">Jumlah:</label>
                        <input type="number" name="jumlah[]" min="1" required>
                    </template>
                </div>

                <button type="button" onclick="addKopiInput()">Tambah Kopi</button>

                <input type="submit" value="Pesan">
            </form>
        </div>
    </div>

    <?php include 'partials/footer.php'; ?>

    <!-- script for button (tambah kopi) -->
    <script>
        function addKopiInput() {
            const container = document.getElementById("kopi-inputs-container");
            const template = document.getElementById("kopi-input-template");

            const clone = template.content.cloneNode(true);
            container.appendChild(clone);
        }
    </script>
</body>

</html>