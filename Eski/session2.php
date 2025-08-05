<?php
session_start();

$_SESSION['ad']='Fatih ÖRNEK';

$ip = $_SERVER["REMOTE_ADDR"];
$_SESSION['ip']=$ip;
$_SESSION['mail']='test.com';
echo 'Sessionlar atadınız<br>';
?>
<a href="session2_oku.php">Oku</a>
