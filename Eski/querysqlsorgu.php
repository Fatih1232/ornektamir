<?php
$db=@new mysqli("localhost","root","","deneme");
if($db->connect_errno) die('Bağlantı Hatası:'.$db->connect_error);
$db->set_charset("utf8");
$sonuc=$db->query("SELECT * FROM okul");
if(!$sonuc){
echo 'Sorgu Hatası!:'.$db->error;
}
else{
echo '<select name="ogrenci">';
echo '<option value="">Secin...</option>';
while($row=$sonuc->fetch_object()){
echo '<option value="'.$row->sira.'">';
echo $row->adsoyad;
echo '</option>';
}
echo '</select>';
}
$db->close();
?>