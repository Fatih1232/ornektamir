<?php
if($_POST){
    echo "Adınız:".$_POST['ad'];
    echo "<br>";
    echo "Soyadınız:".$_POST['soyad'];
}
?>
<form method="post" action="print_r.php">
    Adınız: <input type=text name="ad"/><br>
    SoyAdınız: <input type=text name="soyad"/><br>
    <input type="submit" value="Gönder">
</form>
