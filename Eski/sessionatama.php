<?php
session_start();
$hata='';
if(!empty($_POST['eposta'])&& !empty($_POST['sifre'])){
    $row['mail']='admin@admin.com';
    $row['parola']='81dc9bdb52d04dc20036dbd8313ed055';
    $row['uyead']='Fatih ÖRNEK';
    if($_POST['eposta']==$row['mail']&&md5($_POST['sifre'])==$row['parola']){
    $_SESSION['uye']=$row['uyead'];   
    }else{
       $hata='Eposta yada şifreniz hatalı'; 
    }
}
?>
<!DOCTYPE html>
<html>
    <title>Session atama </title>
    <meta charset="utf-8">
    <body>
        <?php
         if(isset($_SESSION['uye'])){
            echo '<h3>Kontrol Paneli</h3>';
            echo '<div>Merhaba '.$_SESSION['uye'].'</div>';
         }else{
            echo "<h2>Giriş</h2>
            <div style='color:red'>$hata</div>
            <form action='sessionatama.php' method='POST'>
            Eposta:<input type='text' name='eposta'><br>
            Şifre: <input type='password' name='sifre'><br>
            <input type='submit' value='Giriş Yap'>
            </form>";
         }

        ?>
        </body></html>