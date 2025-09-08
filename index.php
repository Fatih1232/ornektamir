<?php
$klasor = __DIR__ . "/uploads/";
$resimler = glob($klasor . "*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);

session_start();

// Tek kullanıcı bilgisi
$kullanici_adi = "admin";
$sifre = "behzat06";

// Giriş işlemi
if(isset($_POST['login'])){
    if($_POST['username'] === $kullanici_adi && $_POST['password'] === $sifre){
        $_SESSION['giris'] = true;
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    } else {
        $hata = "Kullanıcı adı veya şifre yanlış!";
    }
}

// Çıkış işlemi
if(isset($_GET['logout'])){
    session_destroy();
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
?>
<!DOCTYPE html>
<html lang="tr">
    <head>
		<meta charset="UTF-8">
<title>Ankara motor tamircisi</title>
			<style>
			tr
			{
				text-aling: center;
			}
			h1
			{
			color:white;
			text-align:center;
			
			}
			h2{
				color:white;
				}
			h3
			{
				color:white;
			
			}
			h4
			{
				color:white;
			}
			hiza
			{
				
			
			}
			.slider {
  width: 100%;
  overflow: hidden;
}

.slides {
  display: flex;
  width: calc(2 * <?php echo count($resimler); ?> * 600px); /* resim genişliği 600px */
  animation: slide <?php echo count($resimler) * 5; ?>s linear infinite;
}

.slides img {
  width: 600px;
  height: 400px;
  object-fit: cover;
}

@keyframes slide {
  0% { transform: translateX(0); }
  100% { transform: translateX(-<?php echo count($resimler) * 600; ?>px); }
}
		</style>
		<link rel="stylesheet" href="css/style.css">

<script src="js/slider-min.js" type="text/javascript">
</script> 
		<script src="https://analytics.ahrefs.com/analytics.js" data-key="eT8Y5ETvlapnEL09FVM98A" async></script>
	    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P7SVQN8X');</script>
<!-- End Google Tag Manager -->
	    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9VW9974KGR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9VW9974KGR');
</script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="google-site-verification" content="PtKIdFN2zjZfrjGS9G3qBuXV3Q5O4ClY7itnAzID0AU" />
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS FILES -->                
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,400;0,600;0,700;1,200;1,700&display=swap" rel="stylesheet">
            
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">



        <link href="css/tooplate-barista.css" rel="stylesheet">
	
		<link rel="stylesheet" href="css/style.css">

<script src="js/slider-min.js" type="text/javascript">
</script> 
		<script src="https://analytics.ahrefs.com/analytics.js" data-key="eT8Y5ETvlapnEL09FVM98A" async></script>
	    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P7SVQN8X');</script>
<!-- End Google Tag Manager -->
	    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9VW9974KGR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9VW9974KGR');
</script>
		<script type="text/javascript"> //<![CDATA[
  var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.trust-provider.com/" : "http://www.trustlogo.com/");
  document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
//]]></script>
	    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P7SVQN8X"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        <meta charset="utf-8">
		 <title>Örnek Tamir | Motosiklet, Çim Makinesi, Jeneratör</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="google-site-verification" content="PtKIdFN2zjZfrjGS9G3qBuXV3Q5O4ClY7itnAzID0AU" />
        <meta name="description" content="Ankara Motor, Ankara motor, Örnek Tamir ile Motosiklet, Çim Makinesi, Jeneratör tamiri. Uygun fiyatlı yedek parçalar ve garantili ikinci el ürünler. Hızlı ve güvenilir servis.">
        <meta name="author" content="Örnek Tamir">
  <meta name="keywords" content="motosiklet tamiri, motorsiklet tamiri, ankara motor, ankaranın en iyi motor ustası, ankara motor ustası, yedek parça, ikinci el motosiklet">
        <!-- CSS FILES -->                
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,400;0,600;0,700;1,200;1,700&display=swap" rel="stylesheet">
            
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">



        <link href="css/tooplate-barista.css" rel="stylesheet">
        
		
    </head>
    
    <body>
		<script type="text/javascript"> //<![CDATA[
  var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.trust-provider.com/" : "http://www.trustlogo.com/");
  document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
//]]></script>
	    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P7SVQN8X"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
            <main>
                <nav class="navbar navbar-expand-lg"> 				
                    <div class="container">
                        <a class="navbar-brand d-flex align-items-center" href="index.html">
                            <img src="images/motorbike.png" class="navbar-brand-image img-fluid">
							Örnek Tamir
                        </a>
        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
        
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-lg-auto">
                                <li class="nav-item">
                                    <a class="nav-link click-scroll" href="#section_1">Anasayfa</a>
                                </li>
        
                                <li class="nav-item">
                                    <a class="nav-link click-scroll" href="#section_2">Hakkımızda</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link click-scroll" href="#section_3">İşlerimiz</a>
                                </li>
								
								<li class="nav-item">
                                    <a class="nav-link click-scroll" href="#section_4">Yedek Parça</a>
                                </li>
								
								<li class="nav-item">
                                    <a class="nav-link click-scroll" href="#section_5">İkinci El</a>
                                </li>
								
                                <li class="nav-item">
                                    <a class="nav-link click-scroll" href="#section_6">Yorumlar</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link click-scroll" href="#section_7">İletişim</a>
                                </li>
                            </ul>
							<table class="text-white"><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>-</td><td>
								></td><td></td></tr></table>
							<?php if(!isset($_SESSION['giris'])): ?>
							<h5 class="text-white">Giriş Yap</h5>
    <?php if(isset($hata)) echo "<p style='color:red;'>$hata</p>"; ?>
    <form method="post">
        <input type="text" name="username" placeholder="Kullanıcı Adı" required><br><br>
        <input type="password" name="password" placeholder="Şifre" required><br><br>
        <button type="submit" name="login">Giriş Yap</button>
    </form>
<?php else: ?>
    <h7 class="text-white">Merhaba, BEHZAT!</h7>
    <a href="?logout=1">Çıkış Yap</a><br><br>

    <!-- Upload butonu ve formu sadece giriş yapmışsa göster -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="dosya" accept="image/*" required>
        <button type="submit">Resim Yükle</button>
    </form>
<?php endif; ?>
                        </div></br>
                    </div>
                </nav>


                <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                    <div class="container">
					<img src="images/moto1.jpg" height="300" width="300">
                        <div class="row align-items-center">

                            <div class="col-lg-6 col-12 mx-auto">
								<h4>Ankara Motosiklet Tamircisi</h4>
								
                                
                                <h1>BEHZAT USTA</h1>

                                <p class="text-white mb-4 pb-lg-2">
									BAKIM / <em>SERVİS /</em> TAMİR /</em> ÇEKİCİ</br>
					                HİZMETİ VERİLMEKTEDİR.
                                </p>

                                <a class="btn custom-btn custom-border-btn smoothscroll me-3" href="#section_2">
                                    HAKKIMIZDA
                                </a>

                                <a class="btn custom-btn smoothscroll me-2 mb-2" href="#section_3"><strong>İŞLERİMİZ</strong></a>
                            </div>

                        </div>
                    </div>

                    <div class="hero-slides"></div>
                </section>
				


                <section class="about-section section-padding" id="section_2">
                    <div class="section-overlay"></div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-12">
                                <div class="ratio ratio-1x1">
                                    <video autoplay="" loop="" muted="" class="custom-video" poster="">
                                        <source src="videos/dukkan.mp4" type="video/mp4">

                                        
                                    </video>
                                </div>
                            </div>

                            <div class="col-lg-5 col-12 mt-4 mt-lg-0 mx-auto">
                                <em class="text-white">Motosiklet Tamircisi Ankara</em>

                                <h2 class="text-white mb-3">Örnek Tamir</h2>

                                <p class="text-white">Motosikletlerde performans için yağ bakımı ve dönemlik bakım gereklidir.</p>

                                <p class="text-white">Bizimle iletişime geçin.<a rel="nofollow" href="https://wa.me/+905368506600" target="_blank">whatsapp</a>.</p>

                                <a href="#barista-team" class="smoothscroll btn custom-btn custom-border-btn mt-3 mb-4">Tamir Bakım</a>
                            </div>

                        </div>
                    </div>
                </section>


                <section class="barista-section section-padding section-bg" id="barista-team">
                    <div class="container">
                        <div class="row justify-content-center">

                            <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
                                <em class="text-white">Tamir ve bakımını yaptığımız motorlar</em>

                                <h2 class="text-white">En Popüler</h2>
                            </div>

                            <div class="col-lg-3 col-md-6 col-12 mb-4">
                                <div class="team-block-wrap">
                                    <div class="team-block-info d-flex flex-column">
                                        <div class="d-flex mt-auto mb-3">
                                            <h4 class="text-white mb-0">Harley Davidson</h4>

                                            <p class="badge ms-4"><em>Yeni</em></p>
                                        </div>

                                        <p class="text-white mb-0"> En yeni Harley motosiklet modelleri</p>
                                    </div>

                                    <div class="team-block-image-wrap">
                                        <img src="images/motor/harleydavinson.jpg" class="team-block-image img-fluid" alt="ankara motosiklet">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-12 mb-4">
                                <div class="team-block-wrap">
                                    <div class="team-block-info d-flex flex-column">
                                        <div class="d-flex mt-auto mb-3">
                                            <h4 class="text-white mb-0">Racing</h4>

                                            <p class="badge ms-4"><em>Boss</em></p>
                                        </div>

                                        <p class="text-white mb-0">En yeni Racing motosiklet modelleri</p>
                                    </div>

                                    <div class="team-block-image-wrap">
                                        <img src="images/motor/racingmotor.jpg" class="team-block-image img-fluid" alt="ankara motor">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-12 mb-4">
                                <div class="team-block-wrap">
                                    <div class="team-block-info d-flex flex-column">
                                        <div class="d-flex mt-auto mb-3">
                                            <h4 class="text-white mb-0">Ducati</h4>

                                            <p class="badge ms-4"><em>Tutku</em></p>
                                        </div>

                                        <p class="text-white mb-0">En yeni Ducati motosiklet modelleri</p>
                                    </div>

                                    <div class="team-block-image-wrap">
                                        <img src="images/motor/ducati.jpg" class="team-block-image img-fluid" alt="ankara motor">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="team-block-wrap">
                                    <div class="team-block-info d-flex flex-column">
                                        <div class="d-flex mt-auto mb-3">
                                            <h4 class="text-white mb-0">Honda CBR 1000 RR</h4>

                                            <p class="badge ms-4"><em>Hız</em></p>
                                        </div>

                                        <p class="text-white mb-0">En yeni Honda motosiklet modelleri</p>
                                    </div>

                                    <div class="team-block-image-wrap">
                                        <img src="images/motor/hondaCBR.jpg" class="team-block-image img-fluid" alt="ankara motosiklet">
                                    </div>
                                </div>
                            </div>

				 <div class="col-lg-3 col-md-6 col-12 mb-4">
                                <div class="team-block-wrap">
                                    <div class="team-block-info d-flex flex-column">
                                        <div class="d-flex mt-auto mb-3">
                                            <h4 class="text-white mb-0">Suzuki</h4>

                                            <p class="badge ms-4"><em>Yarış</em></p>
                                        </div>

                                        <p class="text-white mb-0"> En yeni Suzuki motosiklet modelleri</p>
                                    </div>

                                    <div class="team-block-image-wrap">
                                        <img src="images/suzuki.jpg" class="team-block-image img-fluid" alt="ankaramotor">
                                    </div>
                                </div>
                            </div>

				<div class="col-lg-3 col-md-6 col-12 mb-4">
                                <div class="team-block-wrap">
                                    <div class="team-block-info d-flex flex-column">
                                        <div class="d-flex mt-auto mb-3">
                                            <h4 class="text-white mb-0">Yamaha</h4>

                                            <p class="badge ms-4"><em>Rakipsiz</em></p>
                                        </div>

                                        <p class="text-white mb-0"> En yeni Yamaha motosiklet modelleri</p>
                                    </div>

                                    <div class="team-block-image-wrap">
                                        <img src="images/yamaha.webp" class="team-block-image img-fluid" alt="ankara">
                                    </div>
                                </div>
                            </div>

				<div class="col-lg-3 col-md-6 col-12 mb-4">
                                <div class="team-block-wrap">
                                    <div class="team-block-info d-flex flex-column">
                                        <div class="d-flex mt-auto mb-3">
                                            <h4 class="text-white mb-0">ATV</h4>

                                            <p class="badge ms-4"><em>Dağ Gezisi</em></p>
                                        </div>

                                        <p class="text-white mb-0"> En yeni ATV modelleri</p>
                                    </div>

                                    <div class="team-block-image-wrap">
                                        <img src="images/atv.png" class="team-block-image img-fluid" alt="ankaramotortamircisi">
                                    </div>
                                </div>
                            </div>

				<div class="col-lg-3 col-md-6 col-12 mb-4">
                                <div class="team-block-wrap">
                                    <div class="team-block-info d-flex flex-column">
                                        <div class="d-flex mt-auto mb-3">
                                            <h4 class="text-white mb-0">Honda</h4>

                                            <p class="badge ms-4"><em>Sürat</em></p>
                                        </div>

                                        <p class="text-white mb-0"> En yeni Honda motosiklet modelleri</p>
                                    </div>

                                    <div class="team-block-image-wrap">
                                        <img src="images/honda.jpg" class="team-block-image img-fluid" alt="ankara motor ustası">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </section>


                <section class="menu-section section-padding" id="section_3">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                                <div class="menu-block-wrap">
                                    <div class="text-center mb-4 pb-lg-2">
                                        <em class="text-white">Yedek Parça</em>
                                        <h4 class="text-white">Bakım</h4>
                                    </div>

                                    <div class="menu-block">
                                        <div class="d-flex">
                                            <h4 class="text-white">Çim Makinesi</h4>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto"><a rel="nofollow" href="https://wa.me/+905368506600" target="_blank"><h3>İletişim</h3></a></strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
											<h5>ELEKTİRİKLİ-BENZİNLİ BAKIM SERVİS</h5>
                                        </div>
                                    </div>

                                    <div class="menu-block my-4">
                                        <div class="d-flex">
                                            <h4 class="text-white">
                                                Jeneratör
                                            </h4>
                                        
                                            <span class="underline"></span>

                                            <strong class="text-white ms-auto"><del></del></strong>

                                            <strong class="ms-2"><a rel="nofollow" href="https://wa.me/+905368506600" target="_blank"><h3>İletişim</h3></a></strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
											<h5>BAKIM SERVİS</h5>
                                        </div>
                                    </div>

                                    <div class="menu-block">
                                        <div class="d-flex">
											<h4 class="text-white">Hızarlı Motor
											<span class="badge ms-3">Bakımda Sezon indirimi </span>
											</h4>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto"><a rel="nofollow" href="https://wa.me/+905368506600" target="_blank"><h3>İletişim</h3></a></strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
											<h5>BAKIM SERVİS</h5>
                                        </div>
                                    </div>

                                    <div class="menu-block my-4">
                                        <div class="d-flex">
                                            <h4 class="text-white">İlaçlama Pompası</h4>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto"><a rel="nofollow" href="https://wa.me/+905368506600" target="_blank"><h3>İletişim</h3></a></strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
											<h5>BAKIM SERVİS</h5>
                                        </div>
                                    </div>

                                    <div class="menu-block">
                                        <div class="d-flex">
                                            <h4 class="text-white">Tırpan Motoru</h4>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto"><a rel="nofollow" href="https://wa.me/+905368506600" target="_blank"><h3>İletişim</h3></a></strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <h5>BAKIM SERVİS<h5>
                                        </div>
                                    </div>
					<div class="menu-block">
                                        <div class="d-flex">
                                            <h4 class="text-white">Çapa Motoru</h4>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto"><a rel="nofollow" href="https://wa.me/+905368506600" target="_blank"><h3>İletişim</h3></a></strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <h5>BAKIM SERVİS</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12">
                                <div class="menu-block-wrap">
                                    <div class="text-center mb-4 pb-lg-2">
                                        <em class="text-white">Çekici Hizmeti</em>
                                        <h4 class="text-white">Servis</h4>
                                    </div>

                                    <div class="menu-block">
                                        <div class="d-flex">
                                            <h4 class="text-white">BMW</h4>
                                        
                                            <span class="underline"></span>

                                            <strong class="text-white ms-auto"><del></del></strong>

                                            <strong class="ms-2"><a rel="nofollow" href="https://wa.me/+905368506600" target="_blank"><h3>İletişim</h3></a></strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <h5>Çekici Hizmeti</h5>
                                        </div>
                                    </div>

                                    <div class="menu-block my-4">
                                        <div class="d-flex">
                                            <h4 class="text-white">
                                                Ducati
                                                <span class="badge ms-3"></span>
                                            </h4>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto"><a rel="nofollow" href="https://wa.me/+905368506600" target="_blank"><h3>İletişim</h3></a></strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <h5>Çekici Hizmeti</h5>
                                        </div>
                                    </div>

                                    <div class="menu-block">
                                        <div class="d-flex">
                                            <h4 class="text-white">Harley-Davidson</h4>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto"><a rel="nofollow" href="https://wa.me/+905368506600" target="_blank"><h3>İletişim</h3></a></strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <h5>Çekici Hizmeti</h5>
                                        </div>
                                    </div>

                                    <div class="menu-block my-4">
                                        <div class="d-flex">
                                            <h4 class="text-white">KTM</h4>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto"><a rel="nofollow" href="https://wa.me/+905368506600" target="_blank"><h3>İletişim</h3></a></strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <h5>Çekici Hizmeti</h5>
                                        </div>
                                    </div>

                                    <div class="menu-block">
                                        <div class="d-flex">
                                            <h4 class="text-white">Triumph</h4>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto"><a rel="nofollow" href="https://wa.me/+905368506600" target="_blank"><h3>İletişim</h3></a></strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <h5>Çekici Hizmeti</h5>
                                        </div>
                                    </div>
					<div class="menu-block">
                                        <div class="d-flex">
                                            <h4 class="text-white">Honda</h4>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto"><a rel="nofollow" href="https://wa.me/+905368506600" target="_blank"><h3>İletişim</h3></a></strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <h5>Çekici Hizmeti</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

<section class="barista-section section-padding section-bg" id="barista-team">
                    <div class="container">
                        <div class="row justify-content-center">
 <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
                                <em class="text-white">İşyerimiz Ve İşlerimiz</em>

                                <h2 class="text-white">Ankara Çim Makinesi-Motosiklet Tamiri</h2><br/>
	                        <h2 class="text-white">Örnek Tamir</h2>
	 
                            </div>
<img src="images/1.webp">
<img src="images/2.webp">
<img src="images/3.webp">
	<img src="images/4.webp">
	<img src="images/5.webp">
	<img src="images/6.webp">
				<img src="images/7.webp">
   </div>
                    </div>
	 <section class="reviews-section section-padding section-bg" id="section_4">
                    <div class="container">
                        <div class="row justify-content-center">

 <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
                                <h1>MOTOSİKLET YEDEK PARÇA 2. EL</h1></br>
	 <table class="table">
		 		 <tr>

<marquee behavior="scrool" direction="left">
<img src="images/resim/c3.jpg" width="94" height="88" alt="YEDEK PARÇA"/>
<img src="images/resim/c2.jpg" width="94" height="88" />
<img src="images/resim/b1.jpg" width="94" height="88"/>
<img src="images/resim/e2.jpg" width="94" height="88"/>
<img src="images/resim/e3.jpg" width="94" height="88"/>
<img src="images/resim/e4.jpg" width="94" height="88"/>
<img src="images/resim/e6.jpg" width="94" height="88"/>
<img src="images/resim/e7.jpg" width="94" height="88"/>
<img src="images/resim/e8.jpg" width="94" height="88"/>
<img src="images/resim/o1.jpg" width="94" height="88"/>
	<img src="images/resim/a1.jpg" width="94" height="88"/>
	<img src="images/resim/a2.jpg" width="94" height="88"/>

</marquee>

		 </tr>
			 <tr>
				 <img src="images/resim/a3.jpg" width="325" height="325">
	             <h3>Kuyruk Granajı</h3></br>
				 <a href="https://wa.me/905368506600" target="_blank"><h1>Satın Almak İçin İletişime Geçin</h1></a>
			 </tr>
			  <tr>
				 <img src="images/resim/a4.jpg" width="325" height="325">
	             <h3>Siperlik</h3></br>
				  <a href="https://wa.me/905368506600" target="_blank"><h1>Satın Almak İçin İletişime Geçin</h1></a>
			 </tr>
		 <tr></tr>
             <tr>
				 <img src="images/resim/e1.jpg" width="325" height="325">
	             <h3>Egzoz</h3></br>
				 <a href="https://wa.me/905368506600" target="_blank"><h1>Satın Almak İçin İletişime Geçin</h1></a>
			 </tr>
			 <tr>
				 <img src="images/resim/b2.jpg" width="325" height="325">
	             <h3>Arka Çanta/Bagaj</h3></br>
				 <a href="https://wa.me/905368506600" target="_blank"><h1>Satın Almak İçin İletişime Geçin</h1></a>
			 </tr>
			 <tr>
				 <img src="images/resim/c1.jpg" width="325" height="325">
	             <h3>Siperlik</h3></br>
				 <a href="https://wa.me/905368506600" target="_blank"><h1>Satın Almak İçin İletişime Geçin</h1></a>
			 </tr>
			  <tr>
				 <img src="images/resim/d1.jpg" width="325" height="325">
	             <h3>Vfr Depo Granajı</h3></br>
				  <a href="https://wa.me/905368506600" target="_blank"><h1>Satın Almak İçin İletişime Geçin</h1></a>
			 </tr>
		 <tr></tr> 
     </table>
	  <section class="reviews-section section-padding section-bg" id="section_5">
<h1>İKİNCİ EL SATILIK MOTOR</h1>
<table class="table">
<tr>
				  <img src="images/satilikmotor/s2.jpg" width="325" height="325"></br>
			 </tr>
             <tr>
				 <img src="images/satilikmotor/s5.jpg" width="325" height="325"></br>
			 </tr>
		 <tr>
			 <img src="images/satilikmotor/s6.jpg" width="325" height="325"></br>
         </tr> 
     </table>
	</section></br>
 <h2 style="text-align:center;">GÜNCEL BAKIMINI YAPTIĞIMIZ MOTORLAR</h2>
<div class="slider">
  <div class="slides">
    <?php 
      foreach($resimler as $resim) {
          $dosya = basename($resim);
          echo "<img src='/uploads/$dosya' alt='slider resim'>";
      }
      // Aynı resimleri tekrar ederek kesintisiz geçiş
      foreach($resimler as $resim) {
          $dosya = basename($resim);
          echo "<img src='/uploads/$dosya' alt='slider resim'>";
      }
    ?>
  </div>
</div></div></section>
                </section>

					
                </section>
                            
		
                <section class="reviews-section section-padding section-bg" id="section_6">
                    <div class="container">
                        <div class="row justify-content-center">

                            <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
                                <em class="text-white">ÖRNEK TAMİR BAKIM SERVİSİ</em>

                                <h2 class="text-white">Yorumlar</h2>
                            </div>

                         <div class="timeline">
                                <div class="timeline-container timeline-container-left">
                                    <div class="timeline-content">
                                        <div class="reviews-block">
                                            <div class="reviews-block-image-wrap d-flex align-items-center">
                                                <img src="images/reviews/senior-man-white-sweater-eyeglasses.jpg" class="reviews-block-image img-fluid" alt="ankara motor ustası">

                                                <div class="">
                                                    <h6 class="text-white mb-0">Kays</h6>
                                                    <em class="text-white"> Olivria</em>
                                                </div>
                                            </div>

                                            <div class="reviews-block-info">
                                                <p>Behzat usta kişilik olarak harika bir insan hoş sohbeti ve muhabbeti var güler yüzlü ve Behzat Usta gerçekten işinin ehli bir usta. Gerek tecrübesi, gerekse işine gösterdiği titizlikle güven veriyor. Hem dürüstlüğüyle hem de samimi yaklaşımıyla gönül rahatlığıyla motorunuzu teslim edebileceğiniz nadir ustalardan biri. Emeğine sağlık Behzat Usta, böyle esnaflar iyi ki var! Kendi motoru gibi özen gösteriyor işi yaparken herkesin tanımasını isterim eline emeğine sağlık behzat ustam iyiki varsın 🙏🏼👏🏼</p>

                                                <div class="d-flex border-top pt-3 mt-4">
                                                    <strong class="text-white">5 <small class="ms-2">Rating</small></strong>

                                                    <div class="reviews-group ms-auto">
							<tr>
								<td>★</td>
								<td>★</td>
								<td>★</td>
								<td>★</td>
								<td>★</td>
							</tr>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="timeline-container timeline-container-right">
                                    <div class="timeline-content">
                                        <div class="reviews-block">
                                            <div class="reviews-block-image-wrap d-flex align-items-center">
                                                <img src="images/reviews/adam.jpg" class="reviews-block-image img-fluid" alt="ankara tamirci">

                                                <div class="">
                                                    <h6 class="text-white mb-0">Burak</h6>
                                                    <em class="text-white"> Bahalı</em>
                                                </div>
                                            </div>

                                            <div class="reviews-block-info">
                                                <p>Gerçekten işinin ehli bir usta, güvenle motosikletinizi teslim edebilirsiniz.</p>

                                                <div class="d-flex border-top pt-3 mt-4">
                                                    <strong class="text-white">5 <small class="ms-2">Rating</small></strong>

                                                    <div class="reviews-group ms-auto">
                                                        <tr>
								<td>★</td>
								<td>★</td>
								<td>★</td>
								<td>★</td>
								<td>★</td>
							</tr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="timeline-container timeline-container-left">
                                    <div class="timeline-content">
                                        <div class="reviews-block">
                                            <div class="reviews-block-image-wrap d-flex align-items-center">
                                                <img src="images/reviews/adam2.jpg" class="reviews-block-image img-fluid" alt="ankara motorsiklet">

                                                <div class="">
                                                    <h6 class="text-white mb-0">Mete Han</h6>
                                                    <em class="text-white"> Genç</em>
                                                </div>
                                            </div>

                                            <div class="reviews-block-info">
                                                <p>Behzat Usta Ankarada tanıdığım en dürüst ustalardan biridir. Yaptığı işin herdaim arkasında duran yaptığı işten kaynaklı bir sorun olursa bir kuruş almadan tekrardan yapan ender ustalardan. Evet dükkan biraz küçük ve dağınık ama sonuçta yapılan işçilik ve insanlık güzel. Ankarada durmak yok behzat Usta yola devam.
</p>

                                                <div class="d-flex border-top pt-3 mt-4">
                                                    <strong class="text-white">4.5 <small class="ms-2">Rating</small></strong>

                                                    <div class="reviews-group ms-auto">
                                                        <tr>
								<td>★</td>
								<td>★</td>
								<td>★</td>
								<td>★</td>
								<td>⯨</td>
							</tr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                <section class="contact-section section-padding" id="section_7">
                    <div class="container">
                        <div class="row">   

                            <div class="col-lg-12 col-12">
                                <em class="text-white">Müşteri Memnuniyeti</em>
                                <h2 class="text-white mb-4 pb-lg-2">İletişim</h2>
                            </div>

                            <div class="col-lg-6 col-12">
                                <form action="#" method="post" class="custom-form contact-form" role="form">

                                <div class="row">
                                    
                                    <div class="col-lg-6 col-12">
                                        <label for="name" class="form-label">İsim <sup class="text-danger">*</sup></label>

                                        <input type="text" name="name" id="name" class="form-control" placeholder="İsminizi yazın" required="">
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <label for="email" class="form-label">Mail</label>

                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Mail adresinizi yazın" required="">
                                    </div>

                                    <div class="col-12">
                                        <label for="message" class="form-label">Bizlere Mesajınız</label>

                                        <textarea name="message" rows="4" class="form-control" id="message" placeholder="Mesajınızı yazın" required=""></textarea>
                                        
                                    </div>
                                </div>

                                <div class="col-lg-5 col-12 mx-auto mt-3">
                                    <button type="submit" class="form-control">Gönder</button>
                                </div>
                            </form>
                            </div>

                           
				<div class="map-container">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4413.620995477548!2d32.69321237949301!3d39.887989464337274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d3395b868a0855%3A0x2628c5c3eede9219!2s%C3%96RNEK%20Motosiklet%20Tamir%20Bak%C4%B1m%20%C3%87ekici%20Hizmeti!5e0!3m2!1str!2str!4v1754393138284!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

                        </div>
                    </div>
                </section>


                <footer class="site-footer">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-4 col-12 me-auto">
                                <em class="text-white d-block mb-4">ADRES</em>

                                <strong class="text-white">
                                   
                                    📍Çayyolu, 2661/3. Sk. No:10/C, 06810 Çankaya/Ankara
                                </strong>
                                <ul class="social-icon mt-4">
                                    <li class="social-icon-item">
   <tr>
	   <td>
		   <a href="https://www.facebook.com/ornek.cim.hizar.makinesi.onarim0cayyolu0umitkoy/?locale=tr_TR" class="social-icon-link">
        <img src="images/resim/facebook.png" style="width: 30px; height: 30px;">
    </a>
	   </td>
	   <td>
		      <a href="https://wa.me/+905368506600" class="social-icon-link">
        <img src="images/resim/whatsapp.png" style="width: 30px; height: 30px;">
    </a>
	   </td>
   </tr>
					  
</li>
                                </ul>

				   
                            </div>

                            <div class="col-lg-3 col-12 mt-4 mb-3 mt-lg-0 mb-lg-0">
                                <em class="text-white d-block mb-4">BİZE ULAŞIN</em>

                                <p class="d-flex mb-1">
                                    <strong class="me-2">GSM:</strong>
                                    <a href="" class="site-footer-link">
                                        (+90) 
                                        536 850 66 00
                                    </a>
								</p></br>
							<p class="d-flex mb-1">
                                    <strong class="me-2">MAİL:</strong>
                                    <a href="" class="site-footer-link">
										behzat@ornektamir.com
                                    </a>
                                </p>
                            </div>


                            <div class="col-lg-5 col-12">
                                <em class="text-white d-block mb-4">ÇALIŞMA SAATLERİMİZ</em>

                                <ul class="opening-hours-list">
                                    <li class="d-flex">
                                        PAZARTESİ-CUMARTESİ
                                        <span class="underline"></span>

                                        <strong>9:00 - 18:00</strong>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-8 col-12 mt-4">
                                <p class="copyright-text mb-0">Örnek Tamir 2025 
                                    - Ankara: <a rel="sponsored" href="https://www.google.com/maps/place/%C3%96RNEK+Motosiklet+Tamir+Bak%C4%B1m+%C3%87ekici+Hizmeti/@39.8876566,32.6931414,17z/data=!3m1!4b1!4m6!3m5!1s0x14d3395b868a0855:0x2628c5c3eede9219!8m2!3d39.8876566!4d32.6957163!16s%2Fg%2F11gv0w51tz?entry=ttu&g_ep=EgoyMDI1MDgxMy4wIKXMDSoASAFQAw%3D%3D" target="_blank" width="10" height="10">Motor Tamircisi</a></p>
                            </div>
                    </div>
                </footer>
            </main>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/vegas.min.js"></script>
        <script src="js/custom.js"></script>

    </body>

</html>























































































































