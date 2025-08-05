<?php
session_start();
echo 'Merhaba:'.$_SESSION['ad'];
echo '<br>';
echo 'IP Adresi:'.$_SESSION['ip'];
echo '<br>';
echo 'E posta '.$_SESSION['mail'];

?>