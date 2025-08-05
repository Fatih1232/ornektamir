<?php
$db=@new mysqli("localhost","root","","deneme");
if($db->connect_errno) die('Bağlantı Hatası:'.$db->connect_error);
$db->set_charset("utf8");
$sonuc=$db->query("SELECT * FROM okul");
if(!$sonuc){
echo 'Sorgu Hatası!:'.$db->error;
}
else{
while ($row=$sonuc->fetch_assoc()){
echo "<input type='checkbox' name='ogr[]' value='{$row['adsoyad']}'/>";
echo "<label>{$row['adsoyad']}</label><br>";
}
}
$db->close();
?>