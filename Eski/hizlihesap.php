<?php
session_start();
header("refresh:10; url=hizlihesap.php");
if(!isset($_SESSION['hak']) || isset($_GET['dene'])){
$_SESSION['hak']=6;
}
if(isset($_POST['sayi'])){
if($_SESSION['karesi']==$_POST['sayi']){
$_SESSION['hak']+=1;
}else{
$_SESSION['hak']-=1;
}
}
$sayi=rand(2,12);
$_SESSION['karesi']=pow($sayi,2);
?>
<!DOCTYPE html>
<html>
<title>Hizli Hesap</title>
<meta charset="utf-8">
<body>
<?php
if($_SESSION['hak']<=0){
die('<a href="?dene=1">5 Krediniz Bitti. Yeniden dene</a>');
}
?>
<h4>10 saniye içinde cevap verin.<?=$_SESSION['hak']?> Krediniz var</h4>
<form action="hizlihesap.php" method="POST">
<?=$sayi?>Sayısının karesi kaçtır?<br>
<input type="text" name="sayi">
<input type="submit" value="Gönder"/>
</form>
</body>
</html>