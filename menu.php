<?php session_start(); ?>
<ul>
  <li><a href="index.html">Ana Sayfa</a></li>
  <li><a href="yedekparca.php">Yedek Parça</a>
      <?php if(isset($_SESSION['giris']) && $_SESSION['giris'] === true) { ?>
          <a href="ekle.php?tur=yedekparca">➕ Ekle</a>
      <?php } ?>
  </li>
  <li><a href="ikinciel.php">İkinci El</a>
      <?php if(isset($_SESSION['giris']) && $_SESSION['giris'] === true) { ?>
          <a href="ekle.php?tur=ikinciel">➕ Ekle</a>
      <?php } ?>
  </li>
</ul>
