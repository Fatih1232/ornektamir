<?php
$db=@new mysqli("localhost","root","","deneme");
if($db->connect_errno)die('Bağlantı Hatası:'.$db->connect_error);
$db->set_charset("utf8");
$stmt=$db->prepare("INSERT INTO okul VALUES (NULL,?,?,?,?)");
if($stmt===false) die('Sorgu Hatası:'.$db->error);
$ad='Ceren GEZER'; $sinif='1B'; $not1='70'; $not2='85';
$stmt->bind_param("ssii",$ad,$sinif,$not1,$not2);
$stmt->execute();
echo '<b>'.$db->affected_rows.'kayıt eklendi.</b><br>';
echo '<b>'.$db->insert_id.'nolu sıraya eklendi</b><br>';
$db->close();
?>
