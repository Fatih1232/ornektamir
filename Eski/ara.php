<?php 
echo '<h3>Öğrenci Arama</h3>
<form action="" method="POST">
<input type="text" name="ara" value="'.$_POST['ara'].'">
<input type="submit" value="Arama Yap"></form>';
if(isset($_POST['ara'])&&!empty($_POST['ara'])){
$db=@new mysqli("localhost", "root","","deneme");
if($db->connect_errno)die('Bağlantı Hatası:'.$db->connect_error);
$db->set_charset("utf8");
$stmt=$db->prepare("SELECT * FROM okul WHERE (adsoyad LIKE ? OR not1 LIKE ? OR not2 LIKE ?)");

if($stmt===false) die('Sorgu Hatası:'.$db->error);
$ara='%'.$_POST['ara'].'%';
$stmt->bind_param("sii",$ara,$_POST['ara'],$_POST['ara']);

$stmt->execute();

$sonuc=$stmt->get_result();

if($sonuc->num_rows<1)die('Aradığınız bulunmadı, Yeniden deneyin');


echo 'Arama Sonucu:<br><table border=1>
<tr><td>Sıra</td><td>Ad Soyad</td>
<td>Not1</td><td>Not2</td></tr>';
while($row = $sonuc->fetch_array()){
echo "<tr><td>".$row['sira']."</td><td>";
echo $row['adsoyad']."</td><td>";
echo $row['not1']."</td><td>";
echo $row['not2']."</td></tr>\n";
}
echo "</table>\n";
$db->close();
}
?>