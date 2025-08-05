<?php
$resim = rand(1,4);
if($resim == 1){
    echo '<img src="kus1.jpg">';
}
elseif($resim == 2){
    echo '<img src="kus2.jpg">';
}
elseif($resim == 3){
    echo '<img src="kus3.jpg">';
}
elseif($resim == 4){
    echo '<img src="kus4.jpg">';
}else{echo "Gösterilecek resim yok";}
?>