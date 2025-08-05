<?php
$urun_adet=1; $urun_fiyat=10.00;
$urun_kdv=18; $urun_kargo=5.00;
$urun_toplam=$urun_adet * $urun_fiyat;

if($urun_kdv>0){
$kdv_tutar=$urun_toplam*($urun_kdv/100);
}else{$kdv_tutar=0;}
if($urun_kargo>0){
    $toplam=$urun_toplam+$kdv_tutar+$urun_kargo;
    $kargo="Kargo + ";  
}else{
    $toplam=$urun_toplam+$kdv_tutar;
    $kargo="Kargo ücretsiz.";
}
$toplam=number_format($toplam,2,',','.');
echo "<div>$urun_adet adet Resim Çerçevesi<em>$urun_toplam TL</em>";
echo "<br>(<b> $kargo KDV Dahil </b>) Toplam:<b> $toplam</b> TL</div>";

?>