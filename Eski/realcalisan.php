<?php
$db = new mysqli('localhost','root','','deneme');

if ($db->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $db->connect_error);
}
$db->set_charset("utf8");

// $_GET değerini al ve kontrol et
if (isset($_GET['sira']) && is_numeric($_GET['sira'])) {
    $sira = (int)$_GET['sira']; // Integer'a dönüştür

    // Hazırlanmış ifade kullanarak daha güvenli sorgu
    $stmt = $db->prepare("SELECT * FROM okul WHERE sira = ?");
    $stmt->bind_param("i", $sira);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo $row['adsoyad'] . "<br>";
            echo $row['sinif'] . "<br>";
        }
    } else {
        echo "Aradığınız sıra bulunamadı.";
    }

    $stmt->close();
} else {
    echo "Geçersiz sıra değeri.";
}

$db->close();
?>