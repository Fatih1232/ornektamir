<?php if(!$_POST){ ?>
<style>h4{margin:0} input{display: block}</style>
<h3>Yardım Formu</h3>
<form method="post" action="">
<h4>Konuyu Yazın:</h4>
<input type="text" name="konu">
<h4>Mesajınız</h4>
<textarea rows="3" cols="30" name="mesaj"></textarea>
<input type="submit" value="Gönder">
</form>
<?php
} else if($_POST){
$secilen=array( 'konu'  => FILTER_SANITIZE_SPECIAL_CHARS, 
                'mesaj' => FILTER_SANITIZE_SPECIAL_CHARS
				);
$giris=filter_input_array(INPUT_POST, $secilen);
echo "Konu alanından gelen bilgi:".$giris['konu'];
echo "<br>\n";
echo "Mesaj alanından gelen bilgi:".$giris['mesaj'];
}
?>