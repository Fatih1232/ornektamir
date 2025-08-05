<?php
$ileti = "Bugün PHP Günü";
if(mail('Fatih__ornek@hotmail.com','Email Denemesi', $ileti)){
    echo 'Email gönderildi.';
}
else{
    echo 'Email gitmedi.'; 
}
?>