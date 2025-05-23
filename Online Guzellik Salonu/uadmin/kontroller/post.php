<?php

include('baglan.php');
include('fonksiyonlar.php');
////////////////////////////// GENEL AYARLAR YÖNETİMİ /////////////////////////
if(isset($_POST['site-ayarlar-guncelle'])){
	
	
	function seflink($string){
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$string = strtolower(str_replace($find, $replace, $string));
$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
$string = trim(preg_replace('/\s+/', ' ', $string));
$string = str_replace(' ', '-', $string);
return $string;
}

$seo= seflink($_POST['site_title']);


	
	$klasor="../../resimler/";
	
	$resim_tmp = $_FILES['logo']['tmp_name'];
	
	if(empty($resim_tmp))
	{
		$duzenlenecek_id = 1;
		$ayar_kaydi = $db->query("SELECT * FROM ayarlar WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$logo = $ayar_kaydi['logo'];
	}
	else
	{
		if ($_FILES["logo"]["type"] =="image/gif" || $_FILES["logo"]["type"] =="image/png"|| $_FILES["logo"]["type"] =="image/jpg"|| $_FILES["logo"]["type"] =="image/jpeg") 
		{
			
			$ayar_kaydi = $db->query("SELECT * FROM ayarlar WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['logo']!="resim-yok")
			{
			  unlink("../../resimler/".$ayar_kaydi['logo']);	  
			}
			
			$random = rand(0,995959999);
			
			$logo = $random."-".$seo.".".substr($_FILES['logo']['name'], -3);
			
			move_uploaded_file($_FILES['logo']['tmp_name'],$klasor."/".$logo);
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	
	
	$resim_tmp1 = $_FILES['footer_logo']['tmp_name'];
	
	if(empty($resim_tmp1))
	{
		$duzenlenecek_id = 1;
		$ayar_kaydi = $db->query("SELECT * FROM ayarlar WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$footer_logo = $ayar_kaydi['footer_logo'];
	}
	else
	{
		if ($_FILES["footer_logo"]["type"] =="image/gif" || $_FILES["footer_logo"]["type"] =="image/png"|| $_FILES["footer_logo"]["type"] =="image/jpg"|| $_FILES["footer_logo"]["type"] =="image/jpeg") 
		{
			
			$ayar_kaydi = $db->query("SELECT * FROM ayarlar WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['footer_logo']!="resim-yok")
			{
			  unlink("../../resimler/".$ayar_kaydi['footer_logo']);	  
			}
			
			$random = rand(0,995959999);
			
			$footer_logo = $random."-".$seo.".".substr($_FILES['footer_logo']['name'], -3);
			
			move_uploaded_file($_FILES['footer_logo']['tmp_name'],$klasor."/".$footer_logo);
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	
	
	$resim_tmp2 = $_FILES['favicon']['tmp_name'];
	
	if(empty($resim_tmp2))
	{
		$duzenlenecek_id = 1;
		$ayar_kaydi = $db->query("SELECT * FROM ayarlar WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$favicon = $ayar_kaydi['favicon'];
	}
	else
	{
		if ($_FILES["favicon"]["type"] =="image/gif" || $_FILES["favicon"]["type"] =="image/png"|| $_FILES["favicon"]["type"] =="image/jpg"|| $_FILES["favicon"]["type"] =="image/jpeg") 
		{
			
			$ayar_kaydi = $db->query("SELECT * FROM ayarlar WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['favicon']!="resim-yok")
			{
			  unlink("../../resimler/".$ayar_kaydi['favicon']);	  
			}
			
			$random = rand(0,995959999);
			
			$favicon = $random."-".$seo.".".substr($_FILES['favicon']['name'], -3);
			
			move_uploaded_file($_FILES['favicon']['tmp_name'],$klasor."/".$favicon);
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	$cek=$db->prepare("update ayarlar set site_mail_host=:site_mail_host,gonderen_email=:gonderen_email,site_mail_sifre=:site_mail_sifre,site_mail_port=:site_mail_port,site_mail=:site_mail,footer_copyright=:footer_copyright,site_title=:site_title,site_description=:site_description,site_author=:site_author,site_renk=:site_renk,telefon1=:telefon1,telefon2=:telefon2,whatsapp=:whatsapp,email1=:email1,email2=:email2,adres1=:adres1,adres2=:adres2,google_maps=:google_maps,facebook=:facebook,twitter=:twitter,linkedin=:linkedin,telegram=:telegram,youtube=:youtube,instagram=:instagram,logo=:logo,footer_logo=:footer_logo,favicon=:favicon where id=:id");
	$kaydet = $cek->execute(array("gonderen_email"=>$_POST['gonderen_email'],"site_mail_port"=>$_POST['site_mail_port'],"site_mail_host"=>$_POST['site_mail_host'],"site_mail"=>$_POST['site_mail'],"site_mail_sifre"=>$_POST['site_mail_sifre'],"footer_copyright"=>$_POST['footer_copyright'],"site_title"=>$_POST['site_title'],"site_description"=>$_POST['site_description'],"site_author"=>$_POST['site_author'],"site_renk"=>$_POST['site_renk'],"telefon1"=>$_POST['telefon1'],"telefon2"=>$_POST['telefon2'],"whatsapp"=>$_POST['whatsapp'],"email1"=>$_POST['email1'],"email2"=>$_POST['email2'],"adres1"=>$_POST['adres1'],"adres2"=>$_POST['adres2'],"google_maps"=>$_POST['google_maps'],"facebook"=>$_POST['facebook'],"twitter"=>$_POST['twitter'],"linkedin"=>$_POST['linkedin'],"telegram"=>$_POST['telegram'],"youtube"=>$_POST['youtube'],"instagram"=>$_POST['instagram'],"logo"=>$logo,"footer_logo"=>$footer_logo,"favicon"=>$favicon,"id"=>"1"));
	
	if($kaydet){
		header("location:".$_POST['link'].'?durum=Guncellendi');
	}else {
		header("location:".$_POST['link'].'?durum=Guncellenmedi');
	}
	
	
}
////////////////////////////// GENEL AYARLAR YÖNETİMİ /////////////////////////

if(isset($_POST['mail-gonder'])){
	
	$email = $_POST['email'];
	$email = implode(',',$email);
	
	$ekle = $db->prepare("insert into mailler set mail=:mail");
	$simdi =$ekle->execute(array("mail"=>$email));
	
	if($simdi){
		$mailler = $db->query("select * from mailler order by id desc")->fetch(PDO::FETCH_ASSOC);
		
		
		$mm = $mailler['mail'];
		$mm = explode(',',$mm);
		
	
	foreach($mm as $em =>$deger){
		  include '../class.phpmailer.php';
								$mail = new PHPMailer();
								$mail->IsSMTP();
								$mail->Host = 'mail.umuttamirci.com';
                                $mail->Port = 465;
                                $mail->SMTPAuth = true;
                                $mail->SMTPSecure = 'ssl';
								$mail->Username = 'info@umuttamirci.com';
								$mail->Password = 'umut2020-';
								$mail->SetFrom($mail->Username, $_POST['konu']);
								$mail->AddAddress($deger, 'DENEME');
								$mail->CharSet = 'UTF-8';
								$mail->Subject = $_POST["konu"];
								$mail->MsgHTML($_POST["mesaj"]);
					if($mail->Send()) 
					
					{ header("location:".$_POST['link'].'?durum=Gonderildi');} 
					
					
					else 
					{ 
					header("location:".$_POST['link'].'?durum=Gonderilmedi');
 					}
					
	}
	}
}

////////////////////////////// REFERANS YÖNETİMİ /////////////////////////
if(isset($_POST['referans-ekle'])){
	
	function seflink($string){
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$string = strtolower(str_replace($find, $replace, $string));
$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
$string = trim(preg_replace('/\s+/', ' ', $string));
$string = str_replace(' ', '-', $string);
return $string;
}

$seo= seflink($_POST['adi']);
	   $klasorbanka="../../resimler/";
	$resim_tmpbanka = $_FILES['resim']['tmp_name'];
	if(empty($resim_tmpbanka))
	{
		$resim = "resim-yok";
	}
	else
	{
		
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
			$random = rand(0,9999999);
			
			$resim = $random."-".$seo.".".substr($_FILES['resim']['name'], -3);
			
			move_uploaded_file($_FILES['resim']['tmp_name'],$klasorbanka."/".$resim);
	
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	
	      	$file = "../../resimler/".$resim;
$image = imagecreatefromstring(file_get_contents($file));
ob_start();
imagejpeg($image,NULL,100);
$cont = ob_get_contents();
ob_end_clean();
$randomm=rand(0,965465465465456);
imagedestroy($image);
$content = imagecreatefromstring($cont);
$output = '../../resimler/'.$seo.'-'.$random.'.webp';
$resim=$seo.'-'.$random.'.webp';
imagewebp($content,$output);
imagedestroy($content);
	  
	
	$cek = $db->prepare("insert into referanslar set sira=:sira,adi=:adi,linki=:linki,resim=:resim,durum=:durum");
	$kaydet  =$cek->execute(array("adi"=>$_POST['adi'],"linki"=>$_POST['linki'],"resim"=>$resim,"durum"=>$_POST['durum'],"sira"=>$_POST['sira']));
	
	
	if($kaydet){
		header("location:".$_POST['link'].'?durum=Eklendi');
	}else {
		header("location:".$_POST['link'].'?durum=Eklenmedi');
	}
}
if(isset($_POST['referans-guncelle'])){
	
	function seflink($string){
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$string = strtolower(str_replace($find, $replace, $string));
$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
$string = trim(preg_replace('/\s+/', ' ', $string));
$string = str_replace(' ', '-', $string);
return $string;
}

$seo= seflink($_POST['adi']);

	   $klasord="../../resimler/";
	   $resim_tmpd = $_FILES['resim']['tmp_name'];
	if(empty($resim_tmpd))
	{
    	$duzenlenecek_id = $_POST['id'];
		$ayar_kaydi = $db->query("SELECT * FROM referanslar WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$resim = $ayar_kaydi['resim'];
	}
	else
	{
		
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
		    
		    	$ayar_kaydi = $db->query("SELECT * FROM referanslar WHERE id = '$id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['resim']!="resim-yok")
			{
			  unlink("../../resimler/".$ayar_kaydi['resim']);	  
			}
			
			$random = rand(0,999);
			
			$resim = $random."-".$seo.$_FILES['resim'];
			
			move_uploaded_file($_FILES['resim']['tmp_name'],$klasord."/".$resim);
	
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	$tur ="sayfalar";

	      	 $file = "../../resimler/".$resim;
$image = imagecreatefromstring(file_get_contents($file));
ob_start();
imagejpeg($image,NULL,100);
$cont = ob_get_contents();
ob_end_clean();

imagedestroy($image);
$content = imagecreatefromstring($cont);
$output = '../../resimler/'.$random.'-'.$seo.'.webp';
$resim=$random.'-'.$seo.'.webp';
imagewebp($content,$output);
imagedestroy($content);
	
	
	  
	
	$cek = $db->prepare("update referanslar set sira=:sira,adi=:adi,linki=:linki,resim=:resim,durum=:durum where id=:id");
	$kaydet  =$cek->execute(array("adi"=>$_POST['adi'],"linki"=>$_POST['linki'],"resim"=>$resim,"durum"=>$_POST['durum'],"sira"=>$_POST['sira'],"id"=>$_POST['id']));
	
	
	if($kaydet){
		header("location:".$_POST['link'].'?durum=Guncellendi');
	}else {
		header("location:".$_POST['link'].'?durum=Guncellenmedi');
	}
}

if(isset($_POST['referans-sil'])){
	$ilansil =$db->prepare("delete from referanslar where id=:id");
	$sil = $ilansil->execute(array("id"=>$_POST['id']));
	if($sil){
		header("location:".$_POST['link'].'?durum=Silindi');
	}else {
		header("location:".$_POST['link'].'?durum=Silinmedi');
	}
}
////////////////////////////// REFERANS YÖNETİMİ /////////////////////////

////////////////////////////// YORUM YÖNETİMİ /////////////////////////
if(isset($_POST['yorum-ekle'])){
	
	function seflink($string){
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$string = strtolower(str_replace($find, $replace, $string));
$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
$string = trim(preg_replace('/\s+/', ' ', $string));
$string = str_replace(' ', '-', $string);
return $string;
}

$seo= seflink($_POST['adi']);
	   $klasorbanka="../../resimler/";
	$resim_tmpbanka = $_FILES['resim']['tmp_name'];
	if(empty($resim_tmpbanka))
	{
		$resim = "resim-yok";
	}
	else
	{
		
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
			$random = rand(0,9999999);
			
			$resim = $random."-".$seo.".".substr($_FILES['resim']['name'], -3);
			
			move_uploaded_file($_FILES['resim']['tmp_name'],$klasorbanka."/".$resim);
	
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	
	      	$file = "../../resimler/".$resim;
$image = imagecreatefromstring(file_get_contents($file));
ob_start();
imagejpeg($image,NULL,100);
$cont = ob_get_contents();
ob_end_clean();
$randomm=rand(0,965465465465456);
imagedestroy($image);
$content = imagecreatefromstring($cont);
$output = '../../resimler/'.$seo.'-'.$random.'.webp';
$resim=$seo.'-'.$random.'.webp';
imagewebp($content,$output);
imagedestroy($content);
	  
	
	$cek = $db->prepare("insert into yorumlar set sira=:sira,adi=:adi,unvan=:unvan,resim=:resim,durum=:durum,aciklama=:aciklama");
	$kaydet  =$cek->execute(array("adi"=>$_POST['adi'],"unvan"=>$_POST['unvan'],"resim"=>$resim,"durum"=>$_POST['durum'],"sira"=>$_POST['sira'],"aciklama"=>$_POST['aciklama']));
	
	
	if($kaydet){
		header("location:".$_POST['link'].'?durum=Eklendi');
	}else {
		header("location:".$_POST['link'].'?durum=Eklenmedi');
	}
}

if(isset($_POST['yorum-guncelle'])){
	
	function seflink($string){
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$string = strtolower(str_replace($find, $replace, $string));
$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
$string = trim(preg_replace('/\s+/', ' ', $string));
$string = str_replace(' ', '-', $string);
return $string;
}

$seo= seflink($_POST['adi']);


	   $klasord="../../resimler/";
	   $resim_tmpd = $_FILES['resim']['tmp_name'];
	if(empty($resim_tmpd))
	{
    	$duzenlenecek_id = $_POST['id'];
		$ayar_kaydi = $db->query("SELECT * FROM yorumlar WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$resim = $ayar_kaydi['resim'];
	}
	else
	{
		
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
		    
		    	$ayar_kaydi = $db->query("SELECT * FROM yorumlar WHERE id = '$id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['resim']!="resim-yok")
			{
			  unlink("../../resimler/".$ayar_kaydi['resim']);	  
			}
			
			$random = rand(0,999);
			
			$resim = $random."-".$seo.$_FILES['resim'];
			
			move_uploaded_file($_FILES['resim']['tmp_name'],$klasord."/".$resim);
	
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	$tur ="yorumlar";

	      	 $file = "../../resimler/".$resim;
$image = imagecreatefromstring(file_get_contents($file));
ob_start();
imagejpeg($image,NULL,100);
$cont = ob_get_contents();
ob_end_clean();

imagedestroy($image);
$content = imagecreatefromstring($cont);
$output = '../../resimler/'.$random.'-'.$seo.'.webp';
$resim=$random.'-'.$seo.'.webp';
imagewebp($content,$output);
imagedestroy($content);
	
	  
	
	$cek = $db->prepare("update yorumlar set sira=:sira,adi=:adi,unvan=:unvan,resim=:resim,durum=:durum,aciklama=:aciklama where id=:id");
	$kaydet  =$cek->execute(array("adi"=>$_POST['adi'],"unvan"=>$_POST['unvan'],"resim"=>$resim,"durum"=>$_POST['durum'],"sira"=>$_POST['sira'],"aciklama"=>$_POST['aciklama'],"id"=>$_POST['id']));
	
	
	if($kaydet){
		header("location:".$_POST['link'].'?durum=Guncellendi');
	}else {
		header("location:".$_POST['link'].'?durum=Guncellenmedi');
	}
}

if(isset($_POST['yorum-sil'])){
	$ilansil =$db->prepare("delete from hizmetler where id=:id");
	$sil = $ilansil->execute(array("id"=>$_POST['id']));
	if($sil){
		header("location:".$_POST['link'].'?durum=Silindi');
	}else {
		header("location:".$_POST['link'].'?durum=Silinmedi');
	}
}

////////////////////////////// YORUM YÖNETİMİ /////////////////////////


////////////////////////////// EKİBİMİZ YÖNETİMİ /////////////////////////
if(isset($_POST['ekibimiz-ekle'])){
	
	function seflink($string){
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$string = strtolower(str_replace($find, $replace, $string));
$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
$string = trim(preg_replace('/\s+/', ' ', $string));
$string = str_replace(' ', '-', $string);
return $string;
}

$seo= seflink($_POST['adi']);
	   $klasorbanka="../../resimler/";
	$resim_tmpbanka = $_FILES['resim']['tmp_name'];
	if(empty($resim_tmpbanka))
	{
		$resim = "resim-yok";
	}
	else
	{
		
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
			$random = rand(0,9999999);
			
			$resim = $random."-".$seo.".".substr($_FILES['resim']['name'], -3);
			
			move_uploaded_file($_FILES['resim']['tmp_name'],$klasorbanka."/".$resim);
	
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	
	      	$file = "../../resimler/".$resim;
$image = imagecreatefromstring(file_get_contents($file));
ob_start();
imagejpeg($image,NULL,100);
$cont = ob_get_contents();
ob_end_clean();
$randomm=rand(0,965465465465456);
imagedestroy($image);
$content = imagecreatefromstring($cont);
$output = '../../resimler/'.$seo.'-'.$random.'.webp';
$resim=$seo.'-'.$random.'.webp';
imagewebp($content,$output);
imagedestroy($content);
	  
	
	$cek = $db->prepare("insert into ekibimiz set sira=:sira,adi=:adi,unvan=:unvan,resim=:resim,durum=:durum,aciklama=:aciklama");
	$kaydet  =$cek->execute(array("adi"=>$_POST['adi'],"unvan"=>$_POST['unvan'],"resim"=>$resim,"durum"=>$_POST['durum'],"sira"=>$_POST['sira'],"aciklama"=>$_POST['aciklama']));
	
	
	if($kaydet){
		header("location:".$_POST['link'].'?durum=Eklendi');
	}else {
		header("location:".$_POST['link'].'?durum=Eklenmedi');
	}
}

if(isset($_POST['ekibimiz-guncelle'])){
	
	function seflink($string){
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$string = strtolower(str_replace($find, $replace, $string));
$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
$string = trim(preg_replace('/\s+/', ' ', $string));
$string = str_replace(' ', '-', $string);
return $string;
}

$seo= seflink($_POST['adi']);
$id = $_POST['id'];

	    $klasord="../../resimler/";
	   $resim_tmpd = $_FILES['resim']['tmp_name'];
	if(empty($resim_tmpd))
	{
    	$duzenlenecek_id = $_POST['id'];
		$ayar_kaydi = $db->query("SELECT * FROM ekibimiz WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$resim = $ayar_kaydi['resim'];
	}
	else
	{
		
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
		    
		    	$ayar_kaydi = $db->query("SELECT * FROM ekibimiz WHERE id = '$id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['resim']!="resim-yok")
			{
			  unlink("../../resimler/".$ayar_kaydi['resim']);	  
			}
			
			$random = rand(0,999);
			
			$resim = $random."-".$seo.$_FILES['resim'];
			
			move_uploaded_file($_FILES['resim']['tmp_name'],$klasord."/".$resim);
	
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	


	      	 $file = "../../resimler/".$resim;
$image = imagecreatefromstring(file_get_contents($file));
ob_start();
imagejpeg($image,NULL,100);
$cont = ob_get_contents();
ob_end_clean();

imagedestroy($image);
$content = imagecreatefromstring($cont);
$output = '../../resimler/'.$random.'-'.$seo.'.webp';
$resim=$random.'-'.$seo.'.webp';
imagewebp($content,$output);
imagedestroy($content);
	
	  	$tur ="ekibimiz";
	
	$cek = $db->prepare("update ekibimiz set sira=:sira,adi=:adi,unvan=:unvan,resim=:resim,durum=:durum,aciklama=:aciklama where id=:id");
	$kaydet  =$cek->execute(array("adi"=>$_POST['adi'],"unvan"=>$_POST['unvan'],"resim"=>$resim,"durum"=>$_POST['durum'],"sira"=>$_POST['sira'],"aciklama"=>$_POST['aciklama'],"id"=>$_POST['id']));
	
	
	if($kaydet){
		header("location:".$_POST['link'].'?durum=Guncellendi');
	}else {
		header("location:".$_POST['link'].'?durum=Guncellenmedi');
	}
}

if(isset($_POST['ekibimiz-sil'])){
	$ilansil =$db->prepare("delete from ekibimiz where id=:id");
	$sil = $ilansil->execute(array("id"=>$_POST['id']));
	if($sil){
		header("location:".$_POST['link'].'?durum=Silindi');
	}else {
		header("location:".$_POST['link'].'?durum=Silinmedi');
	}
}

////////////////////////////// EKİBİMİZ YÖNETİMİ /////////////////////////

////////////////////////////// HİZMET YÖNETİMİ /////////////////////////

if(isset($_POST['hizmet-ekle'])){
	
	function seflink($string){
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$string = strtolower(str_replace($find, $replace, $string));
$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
$string = trim(preg_replace('/\s+/', ' ', $string));
$string = str_replace(' ', '-', $string);
return $string;
}

$seo= seflink($_POST['adi']);
	   $klasorbanka="../../resimler/";
	$resim_tmpbanka = $_FILES['resim']['tmp_name'];
	if(empty($resim_tmpbanka))
	{
		$resim = "resim-yok";
	}
	else
	{
		
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
			$random = rand(0,9999999);
			
			$resim = $random."-".$seo.".".substr($_FILES['resim']['name'], -3);
			
			move_uploaded_file($_FILES['resim']['tmp_name'],$klasorbanka."/".$resim);
	
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	

	$tur ="hizmetler";
	$cek = $db->prepare("insert into hizmetler set tur=:tur,seo=:seo,sira=:sira,adi=:adi,tarih=:tarih,onaciklama=:onaciklama,resim=:resim,durum=:durum,aciklama=:aciklama");
	$kaydet  =$cek->execute(array("adi"=>$_POST['adi'],"seo"=>$seo,"tur"=>$tur,"tarih"=>$tarih,"onaciklama"=>$_POST['onaciklama'],"resim"=>$resim,"durum"=>$_POST['durum'],"sira"=>$_POST['sira'],"aciklama"=>$_POST['aciklama']));
	
	
	if($kaydet){
		
		 $sonid=$db->query("select * from hizmetler order by id desc")->fetch(PDO::FETCH_ASSOC);
				
$yeni =$sonid['id'];
    if(isset($_POST['img'])){
    	foreach ($_POST['img'] as $img) {
    		$islem = $db->prepare("INSERT INTO urun_img SET urun_id = ?, img = ?,tur=?");
        	$islem = $islem->execute(array($yeni,$img,$tur));
    	}}
		header("location:".$_POST['link'].'?durum=Eklendi');
	}else {
		header("location:".$_POST['link'].'?durum=Eklenmedi');
	}
}

if(isset($_POST['hizmet-guncelle'])){
	
	function seflink($string){
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$string = strtolower(str_replace($find, $replace, $string));
$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
$string = trim(preg_replace('/\s+/', ' ', $string));
$string = str_replace(' ', '-', $string);
return $string;
}

$id = $_POST['id'];
$seo= seflink($_POST['adi']);

	   $klasord="../../resimler/";
	   $resim_tmpd = $_FILES['resim']['tmp_name'];
	if(empty($resim_tmpd))
	{
    	$duzenlenecek_id = $_POST['id'];
		$ayar_kaydi = $db->query("SELECT * FROM hizmetler WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$resim = $ayar_kaydi['resim'];
	}
	else
	{
		
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
		    
		    	$ayar_kaydi = $db->query("SELECT * FROM hizmetler WHERE id = '$id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['resim']!="resim-yok")
			{
			  unlink("../../resimler/".$ayar_kaydi['resim']);	  
			}
			
			$random = rand(0,999);
			
			$resim = $random."-".$seo.$_FILES['resim'];
			
			move_uploaded_file($_FILES['resim']['tmp_name'],$klasord."/".$resim);
	
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	




$tur ="hizmetler";
		  $deleteee = $db->exec("DELETE FROM urun_img WHERE urun_id = '$id' and tur='hizmetler'");
        
	if(isset($_POST['img'])){
    	foreach ($_POST['img'] as $img) {
			
	
    		$islem = $db->prepare("INSERT INTO urun_img SET urun_id = ?, img = ?,tur=?");
        	$islem = $islem->execute(array($id,$img,$tur));
    	}
    }
	   
	  
	
	$cek = $db->prepare("update hizmetler set tur=:tur,seo=:seo,sira=:sira,adi=:adi,tarih=:tarih,onaciklama=:onaciklama,resim=:resim,durum=:durum,aciklama=:aciklama where id=:id");
	$kaydet  =$cek->execute(array("adi"=>$_POST['adi'],"seo"=>$seo,"tur"=>$tur,"tarih"=>$tarih,"onaciklama"=>$_POST['onaciklama'],"resim"=>$resim,"durum"=>$_POST['durum'],"sira"=>$_POST['sira'],"aciklama"=>$_POST['aciklama'],"id"=>$_POST['id']));
	
	
	if($kaydet){
		header("location:".$_POST['link'].'?durum=Guncellendi');
	}else {
		header("location:".$_POST['link'].'?durum=Guncellenmedi');
	}
}

if(isset($_POST['hizmet-sil'])){
	$ilansil =$db->prepare("delete from hizmetler where id=:id");
	$sil = $ilansil->execute(array("id"=>$_POST['id']));
	if($sil){
		header("location:".$_POST['link'].'?durum=Silindi');
	}else {
		header("location:".$_POST['link'].'?durum=Silinmedi');
	}
}

////////////////////////////// HİZMET YÖNETİMİ /////////////////////////


////////////////////////////// ÜRÜN YÖNETİMİ /////////////////////////

if(isset($_POST['urun-ekle'])){
	
	function seflink($string){
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$string = strtolower(str_replace($find, $replace, $string));
$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
$string = trim(preg_replace('/\s+/', ' ', $string));
$string = str_replace(' ', '-', $string);
return $string;
}

$seo= seflink($_POST['adi']);
	   $klasorbanka="../../resimler/";
	$resim_tmpbanka = $_FILES['resim']['tmp_name'];
	if(empty($resim_tmpbanka))
	{
		$resim = "resim-yok";
	}
	else
	{
		
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
			$random = rand(0,9999999);
			
			$resim = $random."-".$seo.".".substr($_FILES['resim']['name'], -3);
			
			move_uploaded_file($_FILES['resim']['tmp_name'],$klasorbanka."/".$resim);
	
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	
	      	$file = "../../resimler/".$resim;
$image = imagecreatefromstring(file_get_contents($file));
ob_start();
imagejpeg($image,NULL,100);
$cont = ob_get_contents();
ob_end_clean();
$randomm=rand(0,965465465465456);
imagedestroy($image);
$content = imagecreatefromstring($cont);
$output = '../../resimler/'.$seo.'-'.$random.'.webp';
$resim=$seo.'-'.$random.'.webp';
imagewebp($content,$output);
imagedestroy($content);
	  
	$tur ="urunler";
	$cek = $db->prepare("insert into urunler set tur=:tur,seo=:seo,sira=:sira,adi=:adi,tarih=:tarih,onaciklama=:onaciklama,resim=:resim,durum=:durum,aciklama=:aciklama");
	$kaydet  =$cek->execute(array("adi"=>$_POST['adi'],"seo"=>$seo,"tur"=>$tur,"tarih"=>$tarih,"onaciklama"=>$_POST['onaciklama'],"resim"=>$resim,"durum"=>$_POST['durum'],"sira"=>$_POST['sira'],"aciklama"=>$_POST['aciklama']));
	
	
	if($kaydet){
		
		 $sonid=$db->query("select * from urunler order by id desc")->fetch(PDO::FETCH_ASSOC);
				
$yeni =$sonid['id'];
    if(isset($_POST['img'])){
    	foreach ($_POST['img'] as $img) {
    		$islem = $db->prepare("INSERT INTO urun_img SET urun_id = ?, img = ?,tur=?");
        	$islem = $islem->execute(array($yeni,$img,$tur));
    	}}
		header("location:".$_POST['link'].'?durum=Eklendi');
	}else {
		header("location:".$_POST['link'].'?durum=Eklenmedi');
	}
}

if(isset($_POST['urun-guncelle'])){
	
	function seflink($string){
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$string = strtolower(str_replace($find, $replace, $string));
$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
$string = trim(preg_replace('/\s+/', ' ', $string));
$string = str_replace(' ', '-', $string);
return $string;
}

$id = $_POST['id'];
$seo= seflink($_POST['adi']);

	   $klasord="../../resimler/";
	   $resim_tmpd = $_FILES['resim']['tmp_name'];
	if(empty($resim_tmpd))
	{
    	$duzenlenecek_id = $_POST['id'];
		$ayar_kaydi = $db->query("SELECT * FROM urunler WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$resim = $ayar_kaydi['resim'];
	}
	else
	{
		
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
		    
		    	$ayar_kaydi = $db->query("SELECT * FROM urunler WHERE id = '$id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['resim']!="resim-yok")
			{
			  unlink("../../resimler/".$ayar_kaydi['resim']);	  
			}
			
			$random = rand(0,999);
			
			$resim = $random."-".$seo.$_FILES['resim'];
			
			move_uploaded_file($_FILES['resim']['tmp_name'],$klasord."/".$resim);
	
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	


	      	 $file = "../../resimler/".$resim;
$image = imagecreatefromstring(file_get_contents($file));
ob_start();
imagejpeg($image,NULL,100);
$cont = ob_get_contents();
ob_end_clean();

imagedestroy($image);
$content = imagecreatefromstring($cont);
$output = '../../resimler/'.$random.'-'.$seo.'.webp';
$resim=$random.'-'.$seo.'.webp';
imagewebp($content,$output);
imagedestroy($content);

$tur ="urunler";
		  $deleteee = $db->exec("DELETE FROM urun_img WHERE urun_id = '$id' and tur='urunler'");
        
	if(isset($_POST['img'])){
    	foreach ($_POST['img'] as $img) {
			
	
    		$islem = $db->prepare("INSERT INTO urun_img SET urun_id = ?, img = ?,tur=?");
        	$islem = $islem->execute(array($id,$img,$tur));
    	}
    }
	   
	  
	
	$cek = $db->prepare("update urunler set tur=:tur,seo=:seo,sira=:sira,adi=:adi,tarih=:tarih,onaciklama=:onaciklama,resim=:resim,durum=:durum,aciklama=:aciklama where id=:id");
	$kaydet  =$cek->execute(array("adi"=>$_POST['adi'],"seo"=>$seo,"tur"=>$tur,"tarih"=>$tarih,"onaciklama"=>$_POST['onaciklama'],"resim"=>$resim,"durum"=>$_POST['durum'],"sira"=>$_POST['sira'],"aciklama"=>$_POST['aciklama'],"id"=>$_POST['id']));
	
	
	if($kaydet){
		header("location:".$_POST['link'].'?durum=Guncellendi');
	}else {
		header("location:".$_POST['link'].'?durum=Guncellenmedi');
	}
}

if(isset($_POST['urun-sil'])){
	$ilansil =$db->prepare("delete from urunler where id=:id");
	$sil = $ilansil->execute(array("id"=>$_POST['id']));
	if($sil){
		header("location:".$_POST['link'].'?durum=Silindi');
	}else {
		header("location:".$_POST['link'].'?durum=Silinmedi');
	}
}

////////////////////////////// ÜRÜN YÖNETİMİ /////////////////////////

////////////////////////////// İSTATİK YÖNETİMİ /////////////////////////

if(isset($_POST['istatik-ekle'])){
	
	
	  
	
	
	  
	
	$cek = $db->prepare("insert into istatik set sira=:sira,adi=:adi,icon=:icon,durum=:durum,aciklama=:aciklama");
	$kaydet  =$cek->execute(array("adi"=>$_POST['adi'],"icon"=>$_POST['icon'],"durum"=>$_POST['durum'],"sira"=>$_POST['sira'],"aciklama"=>$_POST['aciklama']));
	
	
	if($kaydet){
		header("location:".$_POST['link'].'?durum=Eklendi');
	}else {
		header("location:".$_POST['link'].'?durum=Eklenmedi');
	}
}

if(isset($_POST['istatik-guncelle'])){
	
	
	  
	
	
	  
	
	$cek = $db->prepare("update istatik set sira=:sira,adi=:adi,icon=:icon,durum=:durum,aciklama=:aciklama where id=:id");
	$kaydet  =$cek->execute(array("adi"=>$_POST['adi'],"icon"=>$_POST['icon'],"durum"=>$_POST['durum'],"sira"=>$_POST['sira'],"aciklama"=>$_POST['aciklama'],"id"=>$_POST['id']));
	
	
	if($kaydet){
		header("location:".$_POST['link'].'?durum=Guncellendi');
	}else {
		header("location:".$_POST['link'].'?durum=Guncellenmedi');
	}
}


if(isset($_POST['istatik-sil'])){
	$ilansil =$db->prepare("delete from istatik where id=:id");
	$sil = $ilansil->execute(array("id"=>$_POST['id']));
	if($sil){
		header("location:".$_POST['link'].'?durum=Silindi');
	}else {
		header("location:".$_POST['link'].'?durum=Silinmedi');
	}
}

////////////////////////////// İSTATİK YÖNETİMİ /////////////////////////

////////////////////////////// SLİDER YÖNETİMİ /////////////////////////
if(isset($_POST['slider-ekle'])){
	
	function seflink($string){
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$string = strtolower(str_replace($find, $replace, $string));
$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
$string = trim(preg_replace('/\s+/', ' ', $string));
$string = str_replace(' ', '-', $string);
return $string;
}

$seo= seflink($_POST['adi']);
	   $klasorbanka="../../resimler/";
	$resim_tmpbanka = $_FILES['resim']['tmp_name'];
	if(empty($resim_tmpbanka))
	{
		$resim = "resim-yok";
	}
	else
	{
		
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
			$random = rand(0,9999999);
			
			$resim = $random."-".$seo.".".substr($_FILES['resim']['name'], -3);
			
			move_uploaded_file($_FILES['resim']['tmp_name'],$klasorbanka."/".$resim);
	
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	
	      	$file = "../../resimler/".$resim;
$image = imagecreatefromstring(file_get_contents($file));
ob_start();
imagejpeg($image,NULL,100);
$cont = ob_get_contents();
ob_end_clean();
$randomm=rand(0,965465465465456);
imagedestroy($image);
$content = imagecreatefromstring($cont);
$output = '../../resimler/'.$seo.'-'.$random.'.webp';
$resim=$seo.'-'.$random.'.webp';
imagewebp($content,$output);
imagedestroy($content);
	  
	
	$cek = $db->prepare("insert into slider set sira=:sira,adi=:adi,resim=:resim,durum=:durum");
	$kaydet  =$cek->execute(array("adi"=>$_POST['adi'],"resim"=>$resim,"durum"=>$_POST['durum'],"sira"=>$_POST['sira']));
	
	
	if($kaydet){
		header("location:".$_POST['link'].'?durum=Eklendi');
	}else {
		header("location:".$_POST['link'].'?durum=Eklenmedi');
	}
}

if(isset($_POST['slider-guncelle'])){
	
	function seflink($string){
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$string = strtolower(str_replace($find, $replace, $string));
$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
$string = trim(preg_replace('/\s+/', ' ', $string));
$string = str_replace(' ', '-', $string);
return $string;
}

$seo= seflink($_POST['adi']);
	  
	
		   $klasord="../../resimler/";
	   $resim_tmpd = $_FILES['resim']['tmp_name'];
	if(empty($resim_tmpd))
	{
    	$duzenlenecek_id = $_POST['id'];
		$ayar_kaydi = $db->query("SELECT * FROM slider WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$resim = $ayar_kaydi['resim'];
	}
	else
	{
		
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
		    
		    	$ayar_kaydi = $db->query("SELECT * FROM slider WHERE id = '$id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['resim']!="resim-yok")
			{
			  unlink("../../resimler/".$ayar_kaydi['resim']);	  
			}
			
			$random = rand(0,999);
			
			$resim = $random."-".$seo.$_FILES['resim'];
			
			move_uploaded_file($_FILES['resim']['tmp_name'],$klasord."/".$resim);
	
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	$tur ="sayfalar";

	      	 $file = "../../resimler/".$resim;
$image = imagecreatefromstring(file_get_contents($file));
ob_start();
imagejpeg($image,NULL,100);
$cont = ob_get_contents();
ob_end_clean();

imagedestroy($image);
$content = imagecreatefromstring($cont);
$output = '../../resimler/'.$random.'-'.$seo.'.webp';
$resim=$random.'-'.$seo.'.webp';
imagewebp($content,$output);
imagedestroy($content);
	
	$cek = $db->prepare("update slider set sira=:sira,adi=:adi,resim=:resim,durum=:durum where id=:id");
	$kaydet  =$cek->execute(array("adi"=>$_POST['adi'],"resim"=>$resim,"durum"=>$_POST['durum'],"sira"=>$_POST['sira'],"id"=>$_POST['id']));
	
	
	if($kaydet){
		header("location:".$_POST['link'].'?durum=Guncellendi');
	}else {
		header("location:".$_POST['link'].'?durum=Guncellenmedi');
	}
}

if(isset($_POST['slider-sil'])){
	$ilansil =$db->prepare("delete from slider where id=:id");
	$sil = $ilansil->execute(array("id"=>$_POST['id']));
	if($sil){
		header("location:".$_POST['link'].'?durum=Silindi');
	}else {
		header("location:".$_POST['link'].'?durum=Silinmedi');
	}
}
////////////////////////////// SLİDER YÖNETİMİ /////////////////////////


////////////////////////////// İLAN YÖNETİMİ /////////////////////////

if(isset($_POST['ilan-ekle'])){
		function seflink($string){
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$string = strtolower(str_replace($find, $replace, $string));
$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
$string = trim(preg_replace('/\s+/', ' ', $string));
$string = str_replace(' ', '-', $string);
return $string;
}

$seo= seflink($_POST['adi']);
	   $klasorbanka="../../resimler/";
	$resim_tmpbanka = $_FILES['resim']['tmp_name'];
	if(empty($resim_tmpbanka))
	{
		$resim = "resim-yok";
	}
	else
	{
		
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
			$random = rand(0,9999999);
			
			$resim = $random."-".$seo.".".substr($_FILES['resim']['name'], -3);
			
			move_uploaded_file($_FILES['resim']['tmp_name'],$klasorbanka."/".$resim);
	
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	$tur ="ilanlar";
	      	$file = "../../resimler/".$resim;
$image = imagecreatefromstring(file_get_contents($file));
ob_start();
imagejpeg($image,NULL,100);
$cont = ob_get_contents();
ob_end_clean();
$randomm=rand(0,965465465465456);
imagedestroy($image);
$content = imagecreatefromstring($cont);
$output = '../../resimler/'.$seo.'-'.$random.'.webp';
$resim=$seo.'-'.$random.'.webp';
imagewebp($content,$output);
imagedestroy($content);
	
	$cek = $db->prepare("insert into ilanlar set tur=:tur,durum=:durum,ilan_adi=:ilan_adi,fiyat=:fiyat,adres=:adres,resim=:resim,aciklama=:aciklama,google_maps=:google_maps,video=:video,tarih=:tarih");
	$kaydet = $cek->execute(array("tur"=>$tur,"ilan_adi"=>$_POST['ilan_adi'],"durum"=>$_POST['durum'],"fiyat"=>$_POST['fiyat'],"adres"=>$_POST['adres'],"resim"=>$resim,"aciklama"=>$_POST['aciklama'],"google_maps"=>$_POST['google_maps'],"video"=>$_POST['video'],"tarih"=>$tarih));
	
	
	if($kaydet){
		
		  $sonid=$db->query("select * from ilanlar order by id desc")->fetch(PDO::FETCH_ASSOC);
				
$yeni =$sonid['id'];
    if(isset($_POST['img'])){
    	foreach ($_POST['img'] as $img) {
    		$islem = $db->prepare("INSERT INTO urun_img SET urun_id = ?, img = ?,tur=?");
        	$islem = $islem->execute(array($yeni,$img,$tur));
    	}}
		
		header("location:".$_POST['link'].'?durum=Eklendi');
		
		
	}else {
		header("location:".$_POST['link'].'?durum=Eklenmedi');
	}
}


if(isset($_POST['ilan-sil'])){
	$ilansil =$db->prepare("delete from ilanlar where id=:id");
	$sil = $ilansil->execute(array("id"=>$_POST['id']));
	if($sil){
		header("location:".$_POST['link'].'?durum=Silindi');
	}else {
		header("location:".$_POST['link'].'?durum=Silinmedi');
	}
}


if(isset($_POST['ilan-guncelle'])){
	
	
	$id =$_POST['id'];
		function seflink($string){
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$string = strtolower(str_replace($find, $replace, $string));
$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
$string = trim(preg_replace('/\s+/', ' ', $string));
$string = str_replace(' ', '-', $string);
return $string;
}

$seo= seflink($_POST['ilan_adi']);
	   
	   $klasord="../../resimler/";
	   $resim_tmpd = $_FILES['resim']['tmp_name'];
	if(empty($resim_tmpd))
	{
    	$duzenlenecek_id = $_POST['id'];
		$ayar_kaydi = $db->query("SELECT * FROM ilanlar WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$resim = $ayar_kaydi['resim'];
	}
	else
	{
		
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
		    
		    	$ayar_kaydi = $db->query("SELECT * FROM ilanlar WHERE id = '$id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['resim']!="resim-yok")
			{
			  unlink("../../resimler/".$ayar_kaydi['resim']);	  
			}
			
			$random = rand(0,999);
			
			$resim = $random."-".$seo.$_FILES['resim'];
			
			move_uploaded_file($_FILES['resim']['tmp_name'],$klasord."/".$resim);
	
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	$tur ="ilanlar";

	      	 $file = "../../resimler/".$resim;
$image = imagecreatefromstring(file_get_contents($file));
ob_start();
imagejpeg($image,NULL,100);
$cont = ob_get_contents();
ob_end_clean();

imagedestroy($image);
$content = imagecreatefromstring($cont);
$output = '../../resimler/'.$random.'-'.$seo.'.webp';
$resim1=$random.'-'.$seo.'.webp';
imagewebp($content,$output);
imagedestroy($content);

	  $deleteee = $db->exec("DELETE FROM urun_img WHERE urun_id = '$id' and tur='ilanlar'");
        
	if(isset($_POST['img'])){
    	foreach ($_POST['img'] as $img) {
			
	
    		$islem = $db->prepare("INSERT INTO urun_img SET urun_id = ?, img = ?,tur=?");
        	$islem = $islem->execute(array($id,$img,$tur));
    	}
    }
	
	$cek = $db->prepare("update ilanlar set seo=:seo,tur=:tur,durum=:durum,ilan_adi=:ilan_adi,fiyat=:fiyat,adres=:adres,resim=:resim,aciklama=:aciklama,google_maps=:google_maps,video=:video,gtarih=:gtarih where id=:id");
	$kaydet = $cek->execute(array("seo"=>$seo,"tur"=>$tur,"ilan_adi"=>$_POST['ilan_adi'],"durum"=>$_POST['durum'],"fiyat"=>$_POST['fiyat'],"adres"=>$_POST['adres'],"resim"=>$resim1,"aciklama"=>$_POST['aciklama'],"google_maps"=>$_POST['google_maps'],"video"=>$_POST['video'],"gtarih"=>$tarih,"id"=>$_POST['id']));
	
	
	if($kaydet){
		
		
		header("location:".$_POST['link'].'?durum=Guncellendi');
		
		
	}else {
		header("location:".$_POST['link'].'?durum=Guncellenmedi');
	}
}
////////////////////////////// İLAN YÖNETİMİ /////////////////////////

//////////////////// SAYFA YÖNETİMİ /////////////////////////////

if(isset($_POST['sayfa-ekle'])){
	
	function seflink($string){
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$string = strtolower(str_replace($find, $replace, $string));
$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
$string = trim(preg_replace('/\s+/', ' ', $string));
$string = str_replace(' ', '-', $string);
return $string;
}

$seo= seflink($_POST['adi']);
	   $klasorbanka="../../resimler/";
	$resim_tmpbanka = $_FILES['resim']['tmp_name'];
	if(empty($resim_tmpbanka))
	{
		$resim = "resim-yok";
	}
	else
	{
		
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
			$random = rand(0,9999999);
			
			$resim = $random."-".$seo.".".substr($_FILES['resim']['name'], -3);
			
			move_uploaded_file($_FILES['resim']['tmp_name'],$klasorbanka."/".$resim);
	
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	
	      	$file = "../../resimler/".$resim;
$image = imagecreatefromstring(file_get_contents($file));
ob_start();
imagejpeg($image,NULL,100);
$cont = ob_get_contents();
ob_end_clean();
$randomm=rand(0,965465465465456);
imagedestroy($image);
$content = imagecreatefromstring($cont);
$output = '../../resimler/'.$seo.'-'.$random.'.webp';
$resim=$seo.'-'.$random.'.webp';
imagewebp($content,$output);
imagedestroy($content);
	  
	$tur ="sayfalar";
	$cek = $db->prepare("insert into sayfalar set tur=:tur,seo=:seo,sira=:sira,adi=:adi,tarih=:tarih,onaciklama=:onaciklama,resim=:resim,durum=:durum,aciklama=:aciklama");
	$kaydet  =$cek->execute(array("adi"=>$_POST['adi'],"seo"=>$seo,"tur"=>$tur,"tarih"=>$tarih,"onaciklama"=>$_POST['onaciklama'],"resim"=>$resim,"durum"=>$_POST['durum'],"sira"=>$_POST['sira'],"aciklama"=>$_POST['aciklama']));
	
	
	if($kaydet){
		header("location:".$_POST['link'].'?durum=Eklendi');
	}else {
		header("location:".$_POST['link'].'?durum=Eklenmedi');
	}
}

if(isset($_POST['sayfa-guncelle'])){
	
	function seflink($string){
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$string = strtolower(str_replace($find, $replace, $string));
$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
$string = trim(preg_replace('/\s+/', ' ', $string));
$string = str_replace(' ', '-', $string);
return $string;
}

$seo= seflink($_POST['adi']);

	   $klasord="../../resimler/";
	   $resim_tmpd = $_FILES['resim']['tmp_name'];
	if(empty($resim_tmpd))
	{
    	$duzenlenecek_id = $_POST['id'];
		$ayar_kaydi = $db->query("SELECT * FROM sayfalar WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$resim = $ayar_kaydi['resim'];
	}
	else
	{
		
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
		    
		    	$ayar_kaydi = $db->query("SELECT * FROM sayfalar WHERE id = '$id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['resim']!="resim-yok")
			{
			  unlink("../../resimler/".$ayar_kaydi['resim']);	  
			}
			
			$random = rand(0,999);
			
			$resim = $random."-".$seo.$_FILES['resim'];
			
			move_uploaded_file($_FILES['resim']['tmp_name'],$klasord."/".$resim);
	
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	$tur ="sayfalar";

	      	 $file = "../../resimler/".$resim;
$image = imagecreatefromstring(file_get_contents($file));
ob_start();
imagejpeg($image,NULL,100);
$cont = ob_get_contents();
ob_end_clean();

imagedestroy($image);
$content = imagecreatefromstring($cont);
$output = '../../resimler/'.$random.'-'.$seo.'.webp';
$resim=$random.'-'.$seo.'.webp';
imagewebp($content,$output);
imagedestroy($content);
	
	   
	  
	$tur ="sayfalar";
	$cek = $db->prepare("update sayfalar set tur=:tur,seo=:seo,sira=:sira,adi=:adi,tarih=:tarih,onaciklama=:onaciklama,resim=:resim,durum=:durum,aciklama=:aciklama where id=:id");
	$kaydet  =$cek->execute(array("adi"=>$_POST['adi'],"seo"=>$seo,"tur"=>$tur,"tarih"=>$tarih,"onaciklama"=>$_POST['onaciklama'],"resim"=>$resim,"durum"=>$_POST['durum'],"sira"=>$_POST['sira'],"aciklama"=>$_POST['aciklama'],"id"=>$_POST['id']));
	
	
	if($kaydet){
		header("location:".$_POST['link'].'?durum=Guncellendi');
	}else {
		header("location:".$_POST['link'].'?durum=Guncellenmedi');
	}
}

if(isset($_POST['sayfa-sil'])){
	$ilansil =$db->prepare("delete from sayfalar where id=:id");
	$sil = $ilansil->execute(array("id"=>$_POST['id']));
	if($sil){
		header("location:".$_POST['link'].'?durum=Silindi');
	}else {
		header("location:".$_POST['link'].'?durum=Silinmedi');
	}
}

//////////////////// SAYFA YÖNETİMİ /////////////////////////////

//////////////////// GALERİ YÖNETİMİ /////////////////////////////

if(isset($_POST['galeri-ekle'])){
	
	function seflink($string){
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$string = strtolower(str_replace($find, $replace, $string));
$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
$string = trim(preg_replace('/\s+/', ' ', $string));
$string = str_replace(' ', '-', $string);
return $string;
}

$seo= seflink($_POST['adi']);
	   $klasorbanka="../../resimler/";
	$resim_tmpbanka = $_FILES['resim']['tmp_name'];
	if(empty($resim_tmpbanka))
	{
		$resim = "resim-yok";
	}
	else
	{
		
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
			$random = rand(0,9999999);
			
			$resim = $random."-".$seo.".".substr($_FILES['resim']['name'], -3);
			
			move_uploaded_file($_FILES['resim']['tmp_name'],$klasorbanka."/".$resim);
	
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	
	      	$file = "../../resimler/".$resim;
$image = imagecreatefromstring(file_get_contents($file));
ob_start();
imagejpeg($image,NULL,100);
$cont = ob_get_contents();
ob_end_clean();
$randomm=rand(0,965465465465456);
imagedestroy($image);
$content = imagecreatefromstring($cont);
$output = '../../resimler/'.$seo.'-'.$random.'.webp';
$resim=$seo.'-'.$random.'.webp';
imagewebp($content,$output);
imagedestroy($content);
	  
	$tur ="sayfalar";
	$cek = $db->prepare("insert into galeri set tur=:tur,seo=:seo,sira=:sira,adi=:adi,tarih=:tarih,onaciklama=:onaciklama,resim=:resim,durum=:durum,aciklama=:aciklama");
	$kaydet  =$cek->execute(array("adi"=>$_POST['adi'],"seo"=>$seo,"tur"=>$tur,"tarih"=>$tarih,"onaciklama"=>$_POST['onaciklama'],"resim"=>$resim,"durum"=>$_POST['durum'],"sira"=>$_POST['sira'],"aciklama"=>$_POST['aciklama']));
	
	
	if($kaydet){
		header("location:".$_POST['link'].'?durum=Eklendi');
	}else {
		header("location:".$_POST['link'].'?durum=Eklenmedi');
	}
}

if(isset($_POST['galeri-guncelle'])){
	
	function seflink($string){
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$string = strtolower(str_replace($find, $replace, $string));
$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
$string = trim(preg_replace('/\s+/', ' ', $string));
$string = str_replace(' ', '-', $string);
return $string;
}

$seo= seflink($_POST['adi']);

	   $klasord="../../resimler/";
	   $resim_tmpd = $_FILES['resim']['tmp_name'];
	if(empty($resim_tmpd))
	{
    	$duzenlenecek_id = $_POST['id'];
		$ayar_kaydi = $db->query("SELECT * FROM galeri WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$resim = $ayar_kaydi['resim'];
	}
	else
	{
		
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
		    
		    	$ayar_kaydi = $db->query("SELECT * FROM galeri WHERE id = '$id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['resim']!="resim-yok")
			{
			  unlink("../../resimler/".$ayar_kaydi['resim']);	  
			}
			
			$random = rand(0,999);
			
			$resim = $random."-".$seo.$_FILES['resim'];
			
			move_uploaded_file($_FILES['resim']['tmp_name'],$klasord."/".$resim);
	
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	

	      	 $file = "../../resimler/".$resim;
$image = imagecreatefromstring(file_get_contents($file));
ob_start();
imagejpeg($image,NULL,100);
$cont = ob_get_contents();
ob_end_clean();

imagedestroy($image);
$content = imagecreatefromstring($cont);
$output = '../../resimler/'.$random.'-'.$seo.'.webp';
$resim=$random.'-'.$seo.'.webp';
imagewebp($content,$output);
imagedestroy($content);
	
	   
	  
	$tur ="galeri";
	$cek = $db->prepare("update galeri set tur=:tur,seo=:seo,sira=:sira,adi=:adi,tarih=:tarih,onaciklama=:onaciklama,resim=:resim,durum=:durum,aciklama=:aciklama where id=:id");
	$kaydet  =$cek->execute(array("adi"=>$_POST['adi'],"seo"=>$seo,"tur"=>$tur,"tarih"=>$tarih,"onaciklama"=>$_POST['onaciklama'],"resim"=>$resim,"durum"=>$_POST['durum'],"sira"=>$_POST['sira'],"aciklama"=>$_POST['aciklama'],"id"=>$_POST['id']));
	
	
	if($kaydet){
		header("location:".$_POST['link'].'?durum=Guncellendi');
	}else {
		header("location:".$_POST['link'].'?durum=Guncellenmedi');
	}
}

if(isset($_POST['galeri-sil'])){
	$ilansil =$db->prepare("delete from galeri where id=:id");
	$sil = $ilansil->execute(array("id"=>$_POST['id']));
	if($sil){
		header("location:".$_POST['link'].'?durum=Silindi');
	}else {
		header("location:".$_POST['link'].'?durum=Silinmedi');
	}
}

//////////////////// GALERİ YÖNETİMİ /////////////////////////////

//////////////////// VİDEO YÖNETİMİ /////////////////////////////

if(isset($_POST['video-ekle'])){
	
	function seflink($string){
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$string = strtolower(str_replace($find, $replace, $string));
$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
$string = trim(preg_replace('/\s+/', ' ', $string));
$string = str_replace(' ', '-', $string);
return $string;
}

$seo= seflink($_POST['adi']);
	   $klasorbanka="../../resimler/";
	$resim_tmpbanka = $_FILES['resim']['tmp_name'];
	if(empty($resim_tmpbanka))
	{
		$resim = "resim-yok";
	}
	else
	{
		
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
			$random = rand(0,9999999);
			
			$resim = $random."-".$seo.".".substr($_FILES['resim']['name'], -3);
			
			move_uploaded_file($_FILES['resim']['tmp_name'],$klasorbanka."/".$resim);
	
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	
	      	$file = "../../resimler/".$resim;
$image = imagecreatefromstring(file_get_contents($file));
ob_start();
imagejpeg($image,NULL,100);
$cont = ob_get_contents();
ob_end_clean();
$randomm=rand(0,965465465465456);
imagedestroy($image);
$content = imagecreatefromstring($cont);
$output = '../../resimler/'.$seo.'-'.$random.'.webp';
$resim=$seo.'-'.$random.'.webp';
imagewebp($content,$output);
imagedestroy($content);
	  
	$tur ="video";
	$cek = $db->prepare("insert into video set tur=:tur,seo=:seo,sira=:sira,adi=:adi,tarih=:tarih,onaciklama=:onaciklama,resim=:resim,durum=:durum,aciklama=:aciklama");
	$kaydet  =$cek->execute(array("adi"=>$_POST['adi'],"seo"=>$seo,"tur"=>$tur,"tarih"=>$tarih,"onaciklama"=>$_POST['onaciklama'],"resim"=>$resim,"durum"=>$_POST['durum'],"sira"=>$_POST['sira'],"aciklama"=>$_POST['aciklama']));
	
	
	if($kaydet){
		header("location:".$_POST['link'].'?durum=Eklendi');
	}else {
		header("location:".$_POST['link'].'?durum=Eklenmedi');
	}
}

if(isset($_POST['video-guncelle'])){
	
	function seflink($string){
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$string = strtolower(str_replace($find, $replace, $string));
$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
$string = trim(preg_replace('/\s+/', ' ', $string));
$string = str_replace(' ', '-', $string);
return $string;
}

$seo= seflink($_POST['adi']);

	   $klasord="../../resimler/";
	   $resim_tmpd = $_FILES['resim']['tmp_name'];
	if(empty($resim_tmpd))
	{
    	$duzenlenecek_id = $_POST['id'];
		$ayar_kaydi = $db->query("SELECT * FROM video WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$resim = $ayar_kaydi['resim'];
	}
	else
	{
		
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
		    
		    	$ayar_kaydi = $db->query("SELECT * FROM video WHERE id = '$id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['resim']!="resim-yok")
			{
			  unlink("../../resimler/".$ayar_kaydi['resim']);	  
			}
			
			$random = rand(0,999);
			
			$resim = $random."-".$seo.$_FILES['resim'];
			
			move_uploaded_file($_FILES['resim']['tmp_name'],$klasord."/".$resim);
	
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	

	      	 $file = "../../resimler/".$resim;
$image = imagecreatefromstring(file_get_contents($file));
ob_start();
imagejpeg($image,NULL,100);
$cont = ob_get_contents();
ob_end_clean();

imagedestroy($image);
$content = imagecreatefromstring($cont);
$output = '../../resimler/'.$random.'-'.$seo.'.webp';
$resim=$random.'-'.$seo.'.webp';
imagewebp($content,$output);
imagedestroy($content);
	
	   
	  
	$tur ="video";
	$cek = $db->prepare("update video set tur=:tur,seo=:seo,sira=:sira,adi=:adi,tarih=:tarih,onaciklama=:onaciklama,resim=:resim,durum=:durum,aciklama=:aciklama where id=:id");
	$kaydet  =$cek->execute(array("adi"=>$_POST['adi'],"seo"=>$seo,"tur"=>$tur,"tarih"=>$tarih,"onaciklama"=>$_POST['onaciklama'],"resim"=>$resim,"durum"=>$_POST['durum'],"sira"=>$_POST['sira'],"aciklama"=>$_POST['aciklama'],"id"=>$_POST['id']));
	
	
	if($kaydet){
		header("location:".$_POST['link'].'?durum=Guncellendi');
	}else {
		header("location:".$_POST['link'].'?durum=Guncellenmedi');
	}
}

if(isset($_POST['video-sil'])){
	$ilansil =$db->prepare("delete from video where id=:id");
	$sil = $ilansil->execute(array("id"=>$_POST['id']));
	if($sil){
		header("location:".$_POST['link'].'?durum=Silindi');
	}else {
		header("location:".$_POST['link'].'?durum=Silinmedi');
	}
}

//////////////////// VİDEO YÖNETİMİ /////////////////////////////


//////////////////// BLOG YÖNETİMİ /////////////////////////////

if(isset($_POST['blog-ekle'])){
	
	function seflink($string){
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$string = strtolower(str_replace($find, $replace, $string));
$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
$string = trim(preg_replace('/\s+/', ' ', $string));
$string = str_replace(' ', '-', $string);
return $string;
}

$seo= seflink($_POST['adi']);
	   $klasorbanka="../../resimler/";
	$resim_tmpbanka = $_FILES['resim']['tmp_name'];
	if(empty($resim_tmpbanka))
	{
		$resim = "resim-yok";
	}
	else
	{
		
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
			$random = rand(0,9999999);
			
			$resim = $random."-".$seo.".".substr($_FILES['resim']['name'], -3);
			
			move_uploaded_file($_FILES['resim']['tmp_name'],$klasorbanka."/".$resim);
	
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	
	      	$file = "../../resimler/".$resim;
$image = imagecreatefromstring(file_get_contents($file));
ob_start();
imagejpeg($image,NULL,100);
$cont = ob_get_contents();
ob_end_clean();
$randomm=rand(0,965465465465456);
imagedestroy($image);
$content = imagecreatefromstring($cont);
$output = '../../resimler/'.$seo.'-'.$random.'.webp';
$resim=$seo.'-'.$random.'.webp';
imagewebp($content,$output);
imagedestroy($content);
	  
	$tur ="haberler";
	$cek = $db->prepare("insert into haberler set tur=:tur,seo=:seo,sira=:sira,adi=:adi,tarih=:tarih,onaciklama=:onaciklama,resim=:resim,durum=:durum,aciklama=:aciklama");
	$kaydet  =$cek->execute(array("adi"=>$_POST['adi'],"seo"=>$seo,"tur"=>$tur,"tarih"=>$tarih,"onaciklama"=>$_POST['onaciklama'],"resim"=>$resim,"durum"=>$_POST['durum'],"sira"=>$_POST['sira'],"aciklama"=>$_POST['aciklama']));
	
	
	if($kaydet){
		
		  $sonid=$db->query("select * from haberler order by id desc")->fetch(PDO::FETCH_ASSOC);
				
$yeni =$sonid['id'];
    if(isset($_POST['img'])){
    	foreach ($_POST['img'] as $img) {
    		$islem = $db->prepare("INSERT INTO urun_img SET urun_id = ?, img = ?,tur=?");
        	$islem = $islem->execute(array($yeni,$img,$tur));
    	}}
		
		header("location:".$_POST['link'].'?durum=Eklendi');
	}else {
		header("location:".$_POST['link'].'?durum=Eklenmedi');
	}
}

if(isset($_POST['blog-guncelle'])){
	
	function seflink($string){
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$string = strtolower(str_replace($find, $replace, $string));
$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
$string = trim(preg_replace('/\s+/', ' ', $string));
$string = str_replace(' ', '-', $string);
return $string;
}

$seo= seflink($_POST['adi']);
$id = $_POST['id'];
	   $klasord="../../resimler/";
	   $resim_tmpd = $_FILES['resim']['tmp_name'];
	if(empty($resim_tmpd))
	{
    	$duzenlenecek_id = $_POST['id'];
		$ayar_kaydi = $db->query("SELECT * FROM haberler WHERE id = '$duzenlenecek_id'")->fetch(PDO::FETCH_ASSOC);
		$resim = $ayar_kaydi['resim'];
	}
	else
	{
		
		if ($_FILES["resim"]["type"] =="image/gif" || $_FILES["resim"]["type"] =="image/png"|| $_FILES["resim"]["type"] =="image/jpg"|| $_FILES["resim"]["type"] =="image/jpeg") 
		{
		    
		    	$ayar_kaydi = $db->query("SELECT * FROM haberler WHERE id = '$id'")->fetch(PDO::FETCH_ASSOC);
  			if($ayar_kaydi['resim']!="resim-yok")
			{
			  unlink("../../resimler/".$ayar_kaydi['resim']);	  
			}
			
			$random = rand(0,999);
			
			$resim = $random."-".$seo.$_FILES['resim'];
			
			move_uploaded_file($_FILES['resim']['tmp_name'],$klasord."/".$resim);
	
		}
		else
		{
			$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> Lütfen  Uygun Formatta Bir Resim Dosyası Seçiniz ( .jpg - .gif - .png ).
			</div>';
		}
	}
	
	$tur ="haberler";


	      	 $file = "../../resimler/".$resim;
$image = imagecreatefromstring(file_get_contents($file));
ob_start();
imagejpeg($image,NULL,100);
$cont = ob_get_contents();
ob_end_clean();

imagedestroy($image);
$content = imagecreatefromstring($cont);
$output = '../../resimler/'.$random.'-'.$seo.'.webp';
$resim=$random.'-'.$seo.'.webp';
imagewebp($content,$output);
imagedestroy($content);
	  $deleteee = $db->exec("DELETE FROM urun_img WHERE urun_id = '$id' and tur='haberler'");
        
	if(isset($_POST['img'])){
    	foreach ($_POST['img'] as $img) {
			
	
    		$islem = $db->prepare("INSERT INTO urun_img SET urun_id = ?, img = ?,tur=?");
        	$islem = $islem->execute(array($id,$img,$tur));
    	}
    }
	   
	
	$cek = $db->prepare("update haberler set tur=:tur,seo=:seo,sira=:sira,adi=:adi,tarih=:tarih,onaciklama=:onaciklama,resim=:resim,durum=:durum,aciklama=:aciklama where id=:id");
	$kaydet  =$cek->execute(array("adi"=>$_POST['adi'],"seo"=>$seo,"tur"=>$tur,"tarih"=>$tarih,"onaciklama"=>$_POST['onaciklama'],"resim"=>$resim,"durum"=>$_POST['durum'],"sira"=>$_POST['sira'],"aciklama"=>$_POST['aciklama'],"id"=>$_POST['id']));
	
	
	if($kaydet){
		header("location:".$_POST['link'].'?durum=Guncellendi');
	}else {
		header("location:".$_POST['link'].'?durum=Guncellenmedi');
	}
}

if(isset($_POST['blog-sil'])){
	$ilansil =$db->prepare("delete from haberler where id=:id");
	$sil = $ilansil->execute(array("id"=>$_POST['id']));
	if($sil){
		header("location:".$_POST['link'].'?durum=Silindi');
	}else {
		header("location:".$_POST['link'].'?durum=Silinmedi');
	}
}

//////////////////// BLOG YÖNETİMİ /////////////////////////////




//////////////////// SSS YÖNETİMİ /////////////////////////////

if(isset($_POST['sss-ekle'])){
	



	
	
	  
	$tur ="sayfalar";
	$cek = $db->prepare("insert into sss set sira=:sira,adi=:adi,durum=:durum,aciklama=:aciklama");
	$kaydet  =$cek->execute(array("adi"=>$_POST['adi'],"durum"=>$_POST['durum'],"sira"=>$_POST['sira'],"aciklama"=>$_POST['aciklama']));
	
	
	if($kaydet){
		header("location:".$_POST['link'].'?durum=Eklendi');
	}else {
		header("location:".$_POST['link'].'?durum=Eklenmedi');
	}
}

if(isset($_POST['sss-guncelle'])){
	



	
	

	$cek = $db->prepare("update sss set sira=:sira,adi=:adi,durum=:durum,aciklama=:aciklama where id=:id");
	$kaydet  =$cek->execute(array("adi"=>$_POST['adi'],"durum"=>$_POST['durum'],"sira"=>$_POST['sira'],"aciklama"=>$_POST['aciklama'],"id"=>$_POST['id']));
	
	
	if($kaydet){
		header("location:".$_POST['link'].'?durum=Guncellendi');
	}else {
		header("location:".$_POST['link'].'?durum=Guncellenmedi');
	}
}

if(isset($_POST['sss-sil'])){
	$ilansil =$db->prepare("delete from sss where id=:id");
	$sil = $ilansil->execute(array("id"=>$_POST['id']));
	if($sil){
		header("location:".$_POST['link'].'?durum=Silindi');
	}else {
		header("location:".$_POST['link'].'?durum=Silinmedi');
	}
}


//////////////////// SSS YÖNETİMİ /////////////////////////////


//////////////////// İLETİŞİM FORMU  /////////////////////////////

if(isset($_POST['iletisim-formu'])){
	
	$ekle = $db->prepare("insert into iletisimler set adsoyad=:adsoyad,konu=:konu,telefon=:telefon,mesaj=:mesaj,email=:email,tarih=:tarih");
	$hemen = $ekle->execute(array("adsoyad"=>$_POST['adsoyad'],"konu"=>$_POST['konu'],"telefon"=>$_POST['telefon'],"mesaj"=>$_POST['mesaj'],"tarih"=>$tarih,"email"=>$_POST['email']));
	
	if($hemen){
		header('location:'.$_POST['link'].'?gonderildi');
	}else {
		header('location:'.$_POST['link'].'?gonderilmedi');	
	}
}

if(isset($_POST['iletisim-sil'])){
	$ilansil =$db->prepare("delete from iletisimler where id=:id");
	$sil = $ilansil->execute(array("id"=>$_POST['id']));
	if($sil){
		header("location:".$_POST['link'].'?durum=Silindi');
	}else {
		header("location:".$_POST['link'].'?durum=Silinmedi');
	}
}


//////////////////// İLETİŞİM FORMU  /////////////////////////////

//////////////////// YÖNETİCİ AYARLARI  /////////////////////////////

if(isset($_POST['yonetici-ekle'])){
	
	
	
	$sifre = sha1($_POST['sifre']);
	$ekle = $db->prepare("insert into yonetici set adi=:adi,normalsifre=:normalsifre,sifre=:sifre");
	$simdi = $ekle->execute(array("adi"=>$_POST['adi'],"normalsifre"=>$_POST['sifre'],"sifre"=>$sifre));
	
	if($simdi){
		header("location:".$_POST['link'].'?durum=Eklendi');
	}else {
		header("location:".$_POST['link'].'?durum=Eklenmedi');
	}
	
}
if(isset($_POST['yonetici-guncelle'])){
	
	
	
	$sifre = sha1($_POST['sifre']);
	$ekle = $db->prepare("update yonetici set adi=:adi,normalsifre=:normalsifre,sifre=:sifre where id=:id");
	$simdi = $ekle->execute(array("adi"=>$_POST['adi'],"normalsifre"=>$_POST['sifre'],"sifre"=>$sifre,"id"=>$_POST['id']));
	
	if($simdi){
		header("location:".$_POST['link'].'?durum=Guncellendi');
	}else {
		header("location:".$_POST['link'].'?durum=Guncellenmedi');
	}
	
}


if(isset($_POST['yonetici-sil'])){
	$ilansil =$db->prepare("delete from yonetici where id=:id");
	$sil = $ilansil->execute(array("id"=>$_POST['id']));
	if($sil){
		header("location:".$_POST['link'].'?durum=Silindi');
	}else {
		header("location:".$_POST['link'].'?durum=Silinmedi');
	}
}
//////////////////// YÖNETİCİ AYARLARI  /////////////////////////////





if(isset($_POST['randevu-al'])){
	$ekle =$db->prepare("insert into randevular set adsoyad=:adsoyad,email=:email,telefon=:telefon,tarih=:tarih,hizmet=:hizmet,mesaj=:mesaj,uzman=:uzman,saat=:saat");
	$simdi =$ekle->execute(array("adsoyad"=>$_POST['adsoyad'],"email"=>$_POST['email'],"telefon"=>$_POST['telefon'],"tarih"=>$_POST['tarih'],"hizmet"=>$_POST['hizmet'],"mesaj"=>$_POST['mesaj'],"uzman"=>$_POST['uzman'],"saat"=>$_POST['saat']));
	if($simdi){
		header("location:".$_POST['link'].'?durum=Gonderildi');
	}else {
		header("location:".$_POST['link'].'?durum=Gonderilmedi');
	}
	
}

if(isset($_POST['randevu-sil'])){
	$ilansil =$db->prepare("delete from randevular where id=:id");
	$sil = $ilansil->execute(array("id"=>$_POST['id']));
	if($sil){
		header("location:".$_POST['link'].'?durum=Silindi');
	}else {
		header("location:".$_POST['link'].'?durum=Silinmedi');
	}
}




?>