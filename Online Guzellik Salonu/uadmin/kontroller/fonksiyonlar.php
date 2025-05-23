<?php
include"baglan.php";
function oturumkontrol($link="giris-yap.php"){
	if (!isset($_SESSION['adi'])) {
		session_destroy();
		header("location:$link");
		exit;
	}
}
$tarih = date("d.m.Y");
$saat = date("H:i");


$ayar=$db->query("select * from ayarlar where id='1'")->fetch(PDO::FETCH_ASSOC);



$sayfa=$db->query("select * from sayfalar where seo='hakkimizda'")->fetch(PDO::FETCH_ASSOC);






/*
$idd=$hizmetd_dizi["id"];
$ip=$_SERVER["REMOTE_ADDR"];
$sor=$db->query("select * from ip_adresi where ip='$ip' and urun_id='$idd'")->fetch(PDO::FETCH_ASSOC);
	if($sor==false){
		if($sor["urun_id"]!=$hizmetd_dizi["id"]){
		$urun_id=$hizmetd_dizi["id"];
		$query=$db->prepare("insert into ip_adresi set ip = :ip, urun_id = :urun_id, zaman = :zaman");
		$insert=$query->execute(array("ip" =>$ip, "urun_id" =>$urun_id, "zaman" =>$tarih ));	
		
		$hitsayisi=$hizmetd_dizi["hit"]+1;
		
		
		$artir = $db->prepare("UPDATE hizmetler SET
		hit = :hit
		WHERE id = :id");
		$update = $artir->execute(array(
			 "hit" => $hitsayisi,
			 "id" => $id
		));
		}
	}
*/



?>