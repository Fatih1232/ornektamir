<?php
session_start();
if(!isset($_SESSION['giris']) || $_SESSION['giris'] !== true) {
    die("❌ Yetkisiz erişim!");
}

$tur = $_POST['tur'];
$aciklama = $_POST['aciklama'];

// Resim yükleme
$target_dir = "uploads/";
if(!is_dir($target_dir)) { mkdir($target_dir); }

$resim_adi = time() . "_" . basename($_FILES["resim"]["name"]);
$target_file = $target_dir . $resim_adi;

if(move_uploaded_file($_FILES["resim"]["tmp_name"], $target_file)) {
    // Açıklamaları dosyaya yaz
    $kayit = [
        "tur" => $tur,
        "resim" => $target_file,
        "aciklama" => $aciklama
    ];
    
    // Mevcut kayıtları oku
    $data_file = "data.txt";
    $kayitlar = [];
    if(file_exists($data_file)) {
        $icerik = file_get_contents($data_file);
        $kayitlar = json_decode($icerik, true);
        if(!is_array($kayitlar)) $kayitlar = [];
    }

    // Yeni kaydı ekle
    $kayitlar[] = $kayit;

    // Dosyaya geri yaz
    file_put_contents($data_file, json_encode($kayitlar, JSON_PRETTY_PRINT));

    echo "✅ Başarıyla kaydedildi! <a href='{$tur}.php'>Geri dön</a>";
} else {
    echo "❌ Resim yüklenemedi!";
}
?>