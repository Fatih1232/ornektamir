<?php
date_default_timezone_set('Europe/Istanbul');
$saat= date("H");
if($saat<=05){
    echo "Gece Yarısı";

}elseif($saat>=22){
    echo "Gece";    
}elseif($saat>=18 && $saat<22){
    echo "Akşam";    
}elseif($saat>=12 && $saat<18){
    echo "Öğlen";    
}elseif($saat>=06 && $saat<12){
    echo "Sabah";    
}else echo "Gün Ağarıyor";
?>