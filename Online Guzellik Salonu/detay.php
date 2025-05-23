<?php
include("uadmin/kontroller/baglan.php");
include("uadmin/kontroller/fonksiyonlar.php");

$seo = $_GET['seo'];

if($seo=='iletisim'){
	$adi ="İletişim";
}else if($seo=='blog'){
	$adi ="Blog";
}else if($seo=='ekibimiz'){
	$adi = "Ekibimiz";
}else if($seo=='sss'){
	$adi = "S.S.S";
}else if($seo=='galeri'){
	$adi = "Galeri";
}else if($seo=='hizmetler'){
	$adi = "Hizmetler";
}else if($hizmetler=$db->query("select * from hizmetler where seo='$seo' and tur='hizmetler'")->fetch(PDO::FETCH_ASSOC)){
	$adi =$hizmetler['adi'];
	$id = $hizmetler['id'];
}else if($seo=='urunler'){
	$adi = "Ürünler";
}else if($urunler=$db->query("select * from urunler where seo='$seo' and tur='urunler'")->fetch(PDO::FETCH_ASSOC)){
	$adi =$urunler['adi'];
	$id = $urunler['id'];
}else if($sayfalar=$db->query("select * from sayfalar where seo='$seo' and tur='sayfalar'")->fetch(PDO::FETCH_ASSOC)){
	$adi =$sayfalar['adi'];
	$id = $sayfalar['id'];
}else if($haberler=$db->query("select * from haberler where seo='$seo' and tur='haberler'")->fetch(PDO::FETCH_ASSOC)){
	$adi =$haberler['adi'];
	$id = $haberler['id'];
}else if($seo=='randevu-al'){
	$adi = "Randevu Al";
}



else {
$adi ="404";	
}
?>
<?php 
// Tell me the root folder path.
// You can also try this one
// $HOME = $_SERVER["DOCUMENT_ROOT"];
// Or this
// dirname(__FILE__)
$HOME = dirname(__FILE__);

// Is this a Windows host ? If it is, change this line to $WIN = 1;
$WIN = 0;

// That's all I need
?>
<!doctype html>
<html lang="tr">
    <head>
	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/remixicon.css">
		<link rel="stylesheet" href="assets/css/meanmenu.min.css">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
		<link rel="stylesheet" href="assets/css/date-picker.min.css">
		<link rel="stylesheet" href="assets/css/before-after.min.css">
		<link rel="stylesheet" href="assets/css/odometer.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/responsive.css">
		
		<link rel="icon" type="image/png" href="resimler/<?=$ayar['favicon']?>">
		<title><?=$adi?> - <?=$ayar['site_title']?></title>
    </head>

    <body>
    <?php
        include("inc/header2.php");
		
		?>
  		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2><?=$adi?></h2>

					<ul>
						<li>
							<a href="./">
								Anasayfa 
							</a>
						</li>

						<li class="active"><?=$adi?></li>
					</ul>
				</div>
			</div>

			<div class="shape shape-1">
				<img src="assets/images/page-title-shape-1.png" alt="Image">
			</div>
			<div class="shape shape-2">
				<img src="assets/images/page-title-shape-2.png" alt="Image">
			</div>
		</div>
		<?php
       
		if($seo=='iletisim'){
			include('detay/iletisim.php');
		}else if($seo=='blog'){
			include('detay/blog.php');
		}else if($seo=='ekibimiz'){
			include('detay/ekibimiz.php');
		}else if($seo=='sss'){
			include('detay/sss.php');
		}else if($seo=='galeri'){
			include('detay/galeri.php');
		}else if($seo=='hizmetler'){
			include('detay/hizmetler.php');
		}else if($hizmetler['adi']!=''){
			include('detay/hizmet-detay.php');
		}else if($seo=='urunler'){
			include('detay/urunler.php');
		}else if($urunler['adi']!=''){
			include('detay/urun-detay.php');
		}else if($sayfalar['adi']!=''){
			include('detay/sayfa-detay.php');
		}else if($haberler['adi']!=''){
			include('detay/blog-detay.php');
		}else if($seo=='randevu-al'){
			include('detay/randevu-al.php');
		}
		
		
		
		
		else {
			include('detay/404.php');
		}
		include("inc/footer.php");
		?>
		
		
	
		
		<div class="go-top">
			<i class="ri-arrow-up-s-fill"></i>
			<i class="ri-arrow-up-s-fill"></i>
		</div>
		

        <script src="assets/js/jquery.min.js"></script> 
        <script src="assets/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/meanmenu.min.js"></script>
		<script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/magnific-popup.min.js"></script>
        <script src="assets/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/js/before-after.min.js"></script>
        <script src="assets/js/appear.min.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/mixitup.min.js"></script>
		<script src="assets/js/form-validator.min.js"></script>
		<script src="assets/js/contact-form-script.js"></script>
		<script src="assets/js/ajaxchimp.min.js"></script>
		<script src="assets/js/custom.js"></script>
    </body>
</html>