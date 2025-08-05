<?php
$sayi=10;
$secenek=array("options"=>array("min_range"=>1,"max_range"=>10));
if(filter_var($sayi, FILTER_VALIDATE_INT,$secenek)){
echo "Sayı uygundur";
}else{
echo "Sayı en az 1 en fazla 10 olabilir.";
}
?>