<?php
$db=@new mysqli("localhost","root","","deneme");
if($db->connect_errno) die('Bağlantı Hatası:'.$db->connect_error);
$db->set_charset("utf8");
$sonuc=$db->query("SELECT * FROM okul");
if(!$sonuc){
echo 'Sorgu Hatası!:'.$db->error;
}
else{
echo '<ul>';
while($row=$sonuc->fetch_array()){
echo '<li>';
echo $row['adsoyad'];
echo '</li>';
}}
$db->close();
?>