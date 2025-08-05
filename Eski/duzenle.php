<?php
$db=@new mysqli("localhost","root","","deneme");
if($db->connect_errno)die('Bağlantı Hatası:'.$db->connect_error);
$db->set_charset("utf8");
if(isset($_POST['sira']) && isset($_POST['adsoyad'])){
$stmt=$db->prepare("UPDATE okul SET adsoyad=?, sinif=?, not1=?, not2=? WHERE sira=?");
if($stmt===false) die('Sorgu Hatası:'.$db->error);
$stmt->bind_param("ssiii",$_POST['adsoyad'],$_POST['sinif'],$_POST['not1'],$_POST['not2'],$_POST['sira']);
$stmt->execute();
echo '<b>'.$db->affected_rows.'kayıt güncellendi</b><br>';
header('Location: listele.php');
exit;
}else if(isset($_GET['sira']) && !empty($_GET['sira'])){
$stmt=$db->prepare("SELECT * FROM okul WHERE sira=?");
$stmt->bind_param("i",$_GET['sira']);
$stmt->execute();
$sonuc=$stmt->get_result();
echo '<b>'.$sonuc->num_rows.'kayıt bulunmaktadır</b><br>';
$veri = $sonuc->fetch_array();
echo '<h3>Öğrenci Kayıt Düzenleme</h3>
<form action="" method="post">
<table><tr align="right"><td>
<input type="hidden" name="sira" value="'.$veri['sira'].'"/>
Ad Soyad:<input type="text" name="adsoyad" value="'.$veri['adsoyad'].'"/>
<br>Öğrencinin Sınıfı:<select name="sinif">
<option value="1A">1A</option>
<option value="1B">1B</option>
<option value="1C">1C</option>
</select><br>1.Notu:<input type="text" name="not1" value="'.$veri['not1'].'"/><br>
2.Notu:<input type="text" name="not2" value="'.$veri['not2'].'"/><br>
<input type="submit" value="Kaydet">
</tr></td></table>
</form>';
}else{
echo 'Bilgileri eksik gönderdiniz.';
}
$db->close();
?>