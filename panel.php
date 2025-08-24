<?php
session_start();
if(!isset($_SESSION['giris']) || $_SESSION['giris'] !== true) {
    header("Location: index.html");
    exit;
}
?>
<h2>✅ Yönetim Paneline Hoşgeldiniz!</h2>
<p>Buradan siteyi yönetebilirsiniz.</p>
<a href="cikis.php">🚪 Çıkış Yap</a>
