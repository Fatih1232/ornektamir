<?php
$db=@new mysqli("localhost","root","","deneme");
if($db->connect_errno)die('Bağlantı Hatası:'.$db->connect_error);
$db->set_charset("utf8");
$stmt=$db->prepare("DELETE FROM okul WHERE sira=?");
if($stmt===false) die('Sorgu Hatası:'.$db->error);
$id="3";
$stmt->bind_param("i",$id);
$stmt->execute();
echo '<b>'.$db->affected_rows.'kayıt silindi</b><br>';
$stmt->close();
$stmt=$db->prepare("SELECT * FROM okul");
if($stmt===false)die('Sorgu Hatası:'.$db_error);
$stmt->execute();
$sonuc=$stmt->get_result();
echo '<b>'.$sonuc->num_rows.'kayıt bulundu</b><br>';
while($row=$sonuc->fetch_array()){
echo $row['adsoyad']."-".$row['sinif']."-".$row['not1'].'<br>';
}
$db->close();
?>