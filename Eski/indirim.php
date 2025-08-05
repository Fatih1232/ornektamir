<?php
$urun="Kareli Defter"; $urun_fiyat=4.50; $urun_adet=20;
if($urun_adet<15){
$indirim=0;
}elseif(($urun_adet>=15 ) && ($urun_adet<=59)){
$indirim=5;
}elseif(($urun_adet>=60 ) && ($urun_adet<=99)){
    $indirim=10;
}elseif(($urun_adet>=100)){
    $indirim=15;
}
$toplam=$urun_fiyat*$urun_adet;
$net_fiyat=$indirim ? $toplam-$toplam*($indirim/100) : $toplam;
$toplam=sprintf('%0.2f',$toplam);
$net_fiyat=sprintf('%0.2f', $net_fiyat);
$durum=$indirim ? "%$indirim indirim ile <s>$toplam TL</s> yerine":'';
echo "<div>$urun_adet Adet <b>$urun</b> $durum $net_fiyat TL </div>";
echo "<br>";
for($i=0; $i<=20; $i+=2){
    print "$i <br>";
}
?>
            