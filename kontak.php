<!DOCTYPE html>
<html>

<head>
    <title>Kedai Kopi Paste - Kontak</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/kontak.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include 'partials/header.php'; ?>

    <div class="main-container">
        <div class="contact-form">
            <h1>Kontak Kami</h1>

            <form action="proses_kontak.php" method="POST">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Pesan:</label>
                <textarea id="message" name="message" required></textarea>

                <input type="submit" value="Kirim">
            </form>

            <div class="wa-contact">
                <p>Atau hubungi kami melalui <a href="https://www.whatsapp.com/" target="_blank"><i class="fa fa-whatsapp"></i></a></p>
            </div>
        </div>
    </div>


    <?php include 'partials/footer.php'; ?>
</body>

</html>