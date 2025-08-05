<?php
if(isset($_POST['tc_no'])){
$tc_no = $_POST['tc_no'];
if(strlen($tc_no) !== 11 || !is_numeric($tc_no)){
echo '"TC Kimlik" yanlış yazıldı<br>';
echo '<button onclick="windows.history.back()">Geri</button>';
exit; }
$topla = 0;
for($i=0; $i<=9; $i++){
$topla += $tc_no[$i];
}
if(substr($topla,-1) == substr($tc_no,-1)){
echo 'TC Kimlik Numaranız doğru';
}else{
echo 'TC Kimlik Numaranız yanlış';
}
} 
?>
<h4>TC Kimlik Numaranızı Yazın:</h4>
<form method="post" action="kimlik.php">
<input type="text" name="tc_no" value="">
<input type="submit" value="Doğrula">
</form>
