<?php
session_start();

// Örnek kullanıcı adı ve şifre
$dogru_kullanici = "behzat06";
$dogru_sifre = "B0650";

$kullanici = $_POST['kullanici_adi'];
$sifre = $_POST['sifre'];

if($kullanici == $dogru_kullanici && $sifre == $dogru_sifre){
    $_SESSION['giris'] = true; // Oturum açıldı
    header("Location: index.html"); // Giriş başarılıysa index.html'e yönlendir
    exit();
}else{
    echo "Kullanıcı adı veya şifre yanlış!";
}
?>


