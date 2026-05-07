<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Form Sonuçları</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container mt-5">
    <section class="card-box p-4">
        <h1>Gönderilen Form Bilgileri</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $adSoyad = $_POST["adSoyad"] ?? "";
            $email = $_POST["email"] ?? "";
            $telefon = $_POST["telefon"] ?? "";
            $konu = $_POST["konu"] ?? "";
            $cinsiyet = $_POST["cinsiyet"] ?? "";
            $onay = $_POST["onay"] ?? "Onaylanmadı";
            $mesaj = $_POST["mesaj"] ?? "";

            echo "<p><strong>Ad Soyad:</strong> " . htmlspecialchars($adSoyad) . "</p>";
            echo "<p><strong>E-posta:</strong> " . htmlspecialchars($email) . "</p>";
            echo "<p><strong>Telefon:</strong> " . htmlspecialchars($telefon) . "</p>";
            echo "<p><strong>Konu:</strong> " . htmlspecialchars($konu) . "</p>";
            echo "<p><strong>Cinsiyet:</strong> " . htmlspecialchars($cinsiyet) . "</p>";
            echo "<p><strong>Onay:</strong> " . htmlspecialchars($onay) . "</p>";
            echo "<p><strong>Mesaj:</strong> " . htmlspecialchars($mesaj) . "</p>";
        } else {
            echo "<div class='alert alert-danger'>Bu sayfaya form gönderilmeden ulaşıldı.</div>";
        }
        ?>

        <a href="iletisim.html" class="btn btn-dark mt-3">Forma Geri Dön</a>
    </section>
</div>

</body>
</html>