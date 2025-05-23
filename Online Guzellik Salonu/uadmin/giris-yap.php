<?php
include("kontroller/baglan.php");
include("kontroller/fonksiyonlar.php");


ob_start();
session_start();

if(isset($_COOKIE["hatirla"]) && isset($_SESSION["eposta"])){
			header("Location:index.php");
			}

			// burada giriş yapma eylemlerini sırayla gerçekleştiriyoruz

			if (isset($_POST["girisyap"])) 
			{
			$email_adres  = $_POST["email"];    
				$sifre = $_POST["sifre"];
				$hatirla = $_POST["hatirla"];
				
				if (empty($email_adres) || empty($sifre)) {
              	$bilgi = '<div class="alert alert-error">
										<button class="close" data-dismiss="alert">×</button>
										<strong>Hata !</strong> E-Mail yada Şifre Boş Olamaz.
						   </div>' ;
				}else {
				    $sifre = sha1($sifre);
					$query = $db->prepare("SELECT * FROM yonetici WHERE adi = :adi AND sifre = :sifre");
              		$query->execute(array('adi' => $email_adres,'sifre' => $sifre));
              		$result = $query->fetch(PDO::FETCH_ASSOC);	
					
					if($query->rowCount()){ 
			
					$_SESSION["adi"] =  $result["adi"];
					

					$_SESSION["id"]   =  $result["id"];
					
					$id = $result["id"] ;
					
					
				
					
					
					if($hatirla==1)
					{
						setcookie("hatirla",$email_adres,time()+2592000);
					}
					
			
				    $bilgi= "<div style='color:#0f0;'>Giriş Yapıldı. Yönlendiriliyorsunuz..</div>";
		?>			
				
						<meta http-equiv='refresh' content='3;URL=index.php'>
					
					
				


<?php

  }else{
					$bilgi = "<div style='color:#f00;'>Şifreniz Hatalı. </div>" ;
				  }	
									
				}
				
			}
?>

<!doctype html>
<html lang="tr">

    <head>
        
        <meta charset="utf-8" />
      <title>Yönetim Paneli - <?=$ayar['site_title']?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="<?=$ayar['site_description']?>" />
        <meta content="<?=$ayar['site_author']?>" name="author" />
  
        <link rel="shortcut icon" href="../resimler/<?=$ayar['favicon']?>">
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="bg-pattern">
        <div class="bg-overlay"></div>
        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-8">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="">
                                    <div class="text-center">
                                        <a href="./" class="">
                                            <img src="../resimler/<?=$ayar['logo']?>" alt="" height="24" class="auth-logo logo-dark mx-auto">
                                            <img src="../resimler/<?=$ayar['logo']?>" alt="" height="24" class="auth-logo logo-light mx-auto">
                                        </a>
                                    </div>
                                    
                                    <p class="mb-5 text-center">Yonetim Paneli İçin Giriş Yapınız</p>
                                    <?=$bilgi?>
                                    <form class="form-horizontal" method="post">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label" for="username">Email</label>
                                                    <input type="text" class="form-control" id="username" name="email" placeholder=" ">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label" for="userpassword">Şifre</label>
                                                    <input type="password" class="form-control" id="userpassword" name="sifre" placeholder=" ">
                                                </div>

                                                
                                                <div class="d-grid mt-4">
                                                  <input class="btn btn-primary waves-effect waves-light" type="submit" name="girisyap" value="Giriş Yap">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <p class="text-white-50">© <script>document.write(new Date().getFullYear())</script> <?=$ayar['site_title']?> <i class="mdi mdi-heart text-danger"></i> Beyza Nur Dalgacı</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
