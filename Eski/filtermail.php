<?php
$email='ece@gmail.com';
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Eposta adresi doğru formatta yazılmış";
}else{
echo "Eposta adresi hatalı";
}
?>