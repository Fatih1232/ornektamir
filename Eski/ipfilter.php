<?php
$ip = '127.0.0.1';
if(filter_var($ip, FILTER_VALIDATE_IP)){
echo "IP adresi doğru formatta";}
else{
echo "IP adresi yanlış";}
?>