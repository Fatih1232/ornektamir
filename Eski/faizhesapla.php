
<form method="post" action="">
Ana Para : <input type="text" name="para" required>
Yüzde Oranı : <input type="text" name="yuzde" required>
Kaç Ay : <input type="text" name="ay" required>
<input type="submit" value="Hesapla"/>
</form>
<?php
if(!empty($_POST['para'])&&$_POST['para']>0){
$para=$_POST['para'];
}
if(!empty($_POST['yuzde'])&&$_POST['yuzde']>0){
$yuzde=$_POST['yuzde']/100;
}
if(!empty($_POST['ay'])&&$_POST['ay']>0){
$aylar=$_POST['ay'];
}
if (isset($para)&& isset($yuzde) && isset($aylar)){
for($ay=1; $ay<=$aylar; $ay++){
$para=$para + ($para*$yuzde);
}
echo "%{$_POST['yuzde']} faiz ile $aylar ay sonra $para TL olur";
}

?>