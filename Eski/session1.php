<?php
session_start();
$_SESSION['ad']='Fatih';
echo 'Session ataması yapılıyor<br>';
?>
<a href="session1_oku.php">Oku</a>