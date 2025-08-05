<!DOCTYPE html>
<html><title>Eposta gönderme</title><meta charset="utf-8">
<body><h3>Arkadaşınıza Eposta gönderin</h3>
<?php
if($_POST && filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)){
if(trim($_POST['konu']) !='' && trim($_POST['mesaj']) !=''){
$kime=$_POST['mail'];
$konu=$_POST['konu'];
$ileti=$_POST['mesaj'];
$basliklar="From:{$_POST['gonderen_mail']}\r\n";
$basliklar.="Reply-To:{$_POST['gonderen_mail']}\r\n";
$basliklar.='X-Mailer: PHP/'.phpversion();
if(mail($kime,$konu,$ileti,$basliklar)){
echo '<h2>Eposta gönderildi.</h2>'; }
else{
echo '<h2>Malesef Eposta gönderilemedi</h2>';
}
}
}
?>
<form action="", method="POST">
Arkadaşınızın E-Postası :<br><input type="text" name="mail"><br>
Sizin E-postanız :<input type="text" name="gonderen_mail"><br>
Konusu<br><input type="text" name="konu"><br>
Mesajınız<br><textarea name="mesaj" rows="5" cols="45"></textarea><br>
<input type="submit" value="Epostayı Gönder"/>
</form></body></html>

