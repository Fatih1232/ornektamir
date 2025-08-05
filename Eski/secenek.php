<?php
if($_POST){
    echo "<h4>Formdan Gelen Bilgiler</h4>";
    echo "Ad Soyad:".$_POST['adsoyad']."<br>";
    echo "Cinsiyet:".$_POST['cinsiyet']."<br>";
    echo "Yabancı Dil:";
    foreach($_POST['dil'] as $anahtar => $deger){
        echo $deger."<br>";
    }
}
?>