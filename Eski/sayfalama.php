<?php
$db=@new mysqli("localhost","root","","deneme");
if($db->connect_errno) die('Bağlantı hatası:'.$db->connect_error);
$db->set_charset("utf8");
$stmt=$db->prepare("SELECT count(*) FROM okul");
if($stmt === false) die('Sorgu Hatası:'.$db->error);
$stmt->execute();
$sonuc=$stmt->get_result();
if($sonuc->num_rows<1) die('Kayıt bulunamadı');
$sayfa_sayisi=$sonuc->fetch_array(MYSQLI_NUM);
$limit=2;
$ofset=isset($_GET['id'])? $_GET['id']:0;
$stmt=$db->prepare("SELECT * FROM okul ORDER BY sira DESC LIMIT ? OFFSET ?");
if($stmt === false) die('Sorgu Hatası:'.$db->error);
$stmt->bind_param("ii",$limit,$ofset);
$stmt->execute();
$sonuc=$stmt->get_result();
echo "<table border=1>";
while($veri=$sonuc->fetch_array()){
echo "<tr><td>\n";
echo $veri['adsoyad']."</td><td>\n";
echo $veri['sinif']."</td><td>\n";
echo $veri['not1']."</td><td>\n";
echo $veri['not2']."</td><td>\n";
}
echo "</table>";
if ($sayfa_sayisi[0]>$limit){
$x=0;
for($i=0; $i<$sayfa_sayisi[0]; $i += $limit){
$x++;
echo "<a href='?id=$i'>[".$x."]</a>";
}
}
?>