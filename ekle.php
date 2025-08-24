<?php
session_start();
if(!isset($_SESSION['giris']) || $_SESSION['giris'] !== true) {
    die("❌ Bu sayfayı görmek için giriş yapmalısınız!");
}

$tur = $_GET['tur']; // yedekparca veya ikinciel
?>

<h2><?php echo ucfirst($tur); ?> Ekle</h2>
<form action="ekle_kaydet.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="tur" value="<?php echo $tur; ?>">
    Resim: <input type="file" name="resim" required><br><br>
    Açıklama: <br>
    <textarea name="aciklama" rows="5" cols="40" required></textarea><br><br>
    <input type="submit" value="Kaydet">
</form>