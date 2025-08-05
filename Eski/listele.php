<?php
$db=@new mysqli("localhost","root","","deneme");
if($db->connect_errno)die('Bağlantı Hatası:'.$db->connect_error);
$db->set_charset("utf8");
$stmt=$db->prepare("SELECT * FROM okul");
if($stmt===false) die('Sorgu Hatası:'.$db->error);
$stmt->execute();
$sonuc=$stmt->get_result();
echo '<b>'.$sonuc->num_rows.'kayıt bulunmaktadır</b><br>';
echo '<table border=1>
<tr>
<td>Ad Soyad</td><td>not1</td><td>not2</td><td>yapılacak işlem</td></tr>';
while($veri=$sonuc->fetch_array()){
echo '<tr><td>'.$veri['adsoyad'].'</td><td>'.$veri['not1'].'</td><td>'.$veri['not2'].'</td><td><a href="duzenle.php?sira='.$veri['sira'].'">[Düzenle]</a><a href="sil.php?sira='.$veri['sira'].'" onclick="return confirm(\'Silinsin mi?\')">[Sil]</a></td></tr>';
}
echo '</table>';
$db->close();
?>