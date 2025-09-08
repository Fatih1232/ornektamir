<?php
// --------------------------
// 1. PHP ayarları (yükleme limitleri)
// --------------------------
ini_set('upload_max_filesize', '50M');
ini_set('post_max_size', '55M');
ini_set('memory_limit', '256M');
ini_set('max_execution_time', '300');

// --------------------------
// 2. Hedef klasör ve izinler
// --------------------------
$hedef_klasor = __DIR__ . "/uploads/";
if (!is_dir($hedef_klasor)) {
    mkdir($hedef_klasor, 0755, true);
}

// --------------------------
// 3. Dosya kontrolü
// --------------------------
if (!isset($_FILES['dosya'])) {
    die("❌ Dosya seçilmedi.");
}

$dosya = $_FILES['dosya'];

// Hata kontrolü
if ($dosya['error'] !== UPLOAD_ERR_OK) {
    die("❌ Yükleme hatası. Kod: " . $dosya['error']);
}

// Boyut kontrolü (50MB)
$maxBoyut = 50 * 1024 * 1024; // 50MB
if ($dosya['size'] > $maxBoyut) {
    die("❌ Dosya boyutu çok büyük. Maksimum 50MB.");
}

// İzin verilen uzantılar
$izinliUzantilar = ['jpg','jpeg','png','gif','webp'];
$uzanti = strtolower(pathinfo($dosya['name'], PATHINFO_EXTENSION));

if (!in_array($uzanti, $izinliUzantilar)) {
    die("❌ İzin verilmeyen dosya türü. Sadece: " . implode(", ", $izinliUzantilar));
}

// --------------------------
// 4. Dosya adını güvenli hale getir
// --------------------------
$yeniAd = uniqid('img_', true) . '.' . $uzanti;
$hedef_dosya = $hedef_klasor . $yeniAd;

// --------------------------
// 5. Dosyayı yükle
// --------------------------
if (move_uploaded_file($dosya['tmp_name'], $hedef_dosya)) {
    echo "✅ Dosya başarıyla yüklendi: <a href='/uploads/$yeniAd'>$yeniAd</a>";
} else {
    die("❌ Dosya yüklenemedi. İzinleri ve klasör yolunu kontrol edin.");
}
session_start();
if(!isset($_SESSION['giris'])){
    die("Yetkisiz erişim!");
?>
