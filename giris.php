<?php
session_start();

$dogru_kullanici = "behzat06";
$dogru_sifre = "B0650";

$kullanici_adi = $_POST['kullanici_adi'];
$sifre = $_POST['sifre'];

if ($kullanici_adi === $dogru_kullanici && $sifre === $dogru_sifre) {
    $_SESSION['giris'] = true; // Kullanıcı oturumu açıldı
    header("Location: index.html");
    exit;
} else {
    echo "<h3>❌ Kullanıcı adı veya şifre yanlış!</h3>";
    echo "<a href='index.html'>Tekrar dene</a>";

}
