<?php
if(!empty($_POST['ad'])){
    if($_POST['mail'] == 'admin@admin.com' && $_POST['sifre'] == 'admin'){
        if($_POST['hatirla']==1){
            setcookie("uyead", $_POST['ad'], strtotime('+30 days'));
            setcookie("mail", $_POST['mail'], strtotime('+30 days'));
        }else{
            setcookie("uyead", $_POST['ad']);
            setcookie("mail", $_POST['mail']);
        }
        header('location: cerezatama.php');
    }
}
?>
<!DOCTYPE html>
<html><head>
    <title>Çerez Atama</title>
    <meta charset="utf-8">
</head><body>
    <?php
    if(isset($_COOKIE['uyead'])){
         echo "<p>Sayın<b>{$_COOKIE['uyead']}</b>Hoşgeldiniz</p>";
         echo "<p>E-posta adresiniz <b>{$_COOKIE['mail']}</b></p>";
    }else{
        echo "<h2>Giriş</h2>
        <form action='cerezatama.php' method='POST'>
        Adınız: <input type='text' name='ad'><br>
        Eposta: <input type='text' name='mail'><br>
        Şifre: <input type='password' name='sifre'><br>
        Beni Hatırla <input type='checkbox' name='hatirla' value='1'><br\>
        <input type='submit' value='Giriş Yap'>
        </form>";

    }
    ?>
    </body></html>