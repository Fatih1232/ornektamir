<?php
session_start();
if(empty($_POST['onay'])){
$mat = '+-*';
$isaret = rand(0,2);
$sayi1=rand(10,30);
$sayi2=rand(1,10);
if($mat[$isaret] == '+'){
$hesapla=$sayi1+$sayi2;
}elseif($mat[$isaret] == '-'){
$hesapla=$sayi1-$sayi2;
}elseif($mat[$isaret] == '*'){
$hesapla=$sayi1*$sayi2;
}
$_SESSION['hatirla']=$hesapla;
echo $sayi1.$mat[$isaret].$sayi2.'=?';
}else{
if($_POST['onay'] == $_SESSION['hatirla']){
echo 'Tebrikler doğru. <a href="">Yeniden dene</a><br>';
}else{
echo 'Yanlış hesaplama. <a href="">Yeniden dene</a><br>';
}
}
?>
<form method="post" action="hesapla.php">
<input type="text" name="onay"><input type="submit" value="Doğrula">
</form>
