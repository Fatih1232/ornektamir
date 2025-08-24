<?php
$data_file = "data.txt";
if(file_exists($data_file)) {
    $icerik = file_get_contents($data_file);
    $kayitlar = json_decode($icerik, true);

    if(is_array($kayitlar)) {
        foreach($kayitlar as $kayit) {
            if($kayit['tur'] === "ikinciel") {
                echo "<div style='margin:10px; padding:10px; border:1px solid #ccc;'>";
                echo "<img src='".$kayit['resim']."' width='150'><br>";
                echo "<p>".$kayit['aciklama']."</p>";
                echo "</div>";
            }
        }
    } else {
        echo "Henüz kayıt eklenmemiş.";
    }
} else {
    echo "Henüz kayıt eklenmemiş.";
}
?>
