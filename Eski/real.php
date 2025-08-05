<?php
$db = @new mysqli('localhost','root','','deneme');
if($db->connect_error){ die($db->connect_error);}
$db->set_charset("utf8");

$_POST = array_map(array($db,'real_escape_string'),$_POST);
$_GET = array_map(array($db,'real_escape_string'),$_GET);

$sira = $db->real_escape_string($_GET['sira']);
$sonuc = $db->query("SELECT * FROM okul WHERE sira='{$sira}'");
while ($satir=$sonuc->fetch_array (MYSQLI_BOTH)){
echo $satir['adsoyad']."<br>";
echo $satir['sinif']."<br>";
}
$sonuc->close();
$db->close();
?>