<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Login Sonucu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container mt-5">
    <section class="card-box p-4">

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $email = $_POST["email"] ?? "";
            $sifre = $_POST["sifre"] ?? "";

            $ogrenciNo = str_replace("@sakarya.edu.tr", "", $email);

            if ($email == $sifre . "@sakarya.edu.tr" && $sifre == $ogrenciNo) {
                echo "<div class='alert alert-success'>";
                echo "Hoşgeldiniz " . htmlspecialchars($ogrenciNo);
                echo "</div>";
            } else {
                echo "<div class='alert alert-danger'>";
                echo "Giriş bilgileri hatalı. Lütfen tekrar deneyiniz.";
                echo "</div>";

                echo "<a href='login.html' class='btn btn-dark mt-3'>Login Sayfasına Dön</a>";
            }

        } else {
            echo "<div class='alert alert-danger'>Bu sayfaya doğrudan erişilemez.</div>";
        }
        ?>

    </section>
</div>

</body>
</html>