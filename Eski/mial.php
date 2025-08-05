<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Mail Gönderme Formu</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen bilgileri alıyoruz
    $gonderen_mail = $_POST['gonderen_mail'];
    $alici_mail = $_POST['alici_mail'];
    $konu = $_POST['konu'];
    $mesaj = $_POST['mesaj'];

    // Boş alanları kontrol ediyoruz
    if (empty($gonderen_mail) || empty($alici_mail) || empty($konu) || empty($mesaj)) {
        echo "<p style='color:red;'>Lütfen tüm alanları doldurun.</p>";
    } else {
        // E-posta başlıklarını oluşturuyoruz
        $headers = "From: " . $gonderen_mail . "\r\n" .
                   "Reply-To: " . $gonderen_mail . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();

        // E-postayı gönderiyoruz
        if (mail($alici_mail, $konu, $mesaj, $headers)) {
            echo "<p style='color:green;'>E-posta başarıyla gönderildi!</p>";
        } else {
            echo "<p style='color:red;'>E-posta gönderilirken bir hata oluştu.</p>";
        }
    }
}
?>

<h2>Mail Gönderme Formu</h2>
<form method="post" action="">
    <label for="gonderen_mail">Gönderen Mail:</label>
    <input type="email" id="gonderen_mail" name="gonderen_mail" required><br><br>

    <label for="alici_mail">Alıcı Mail:</label>
    <input type="email" id="alici_mail" name="alici_mail" required><br><br>

    <label for="konu">Konu:</label>
    <input type="text" id="konu" name="konu" required><br><br>

    <label for="mesaj">Mesaj:</label>
    <textarea id="mesaj" name="mesaj" rows="5" required></textarea><br><br>

    <button type="submit">Gönder</button>
</form>

</body>
</html>
