<?php
$db=@new mysqli('localhost','root','','deneme');
if($db->connect_error){
die($db->connect_error);
}else{
echo "Sunucu bağlantısı başarılı";
$sonuc=$db->query('SELECT * FROM okul');
$row=$sonuc->fetch_array();
print_r($row);
}
$db->close();
?>