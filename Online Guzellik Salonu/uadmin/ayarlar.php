<?php
include("kontroller/baglan.php");
include("kontroller/fonksiyonlar.php");


    ob_start();
session_start();


oturumkontrol();
?>
<!doctype html>
<html lang="tr">

    <head>
        
        <meta charset="utf-8" />
        <title>Site Genel Ayarlar - <?=$ayar['site_title']?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="<?=$ayar['site_description']?>" />
        <meta content="<?=$ayar['site_author']?>" name="author" />
  
        <link rel="shortcut icon" href="../resimler/<?=$ayar['favicon']?>">

             <script type="text/javascript" src="sweetalert2.all.min.js"></script>
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">
    <?php 
if (@$_GET['durum']=="Guncellendi") { ?>
<script>Swal.fire("Site Ayarları", " Başarıyla Güncellendi", "success"); </script>
<?php } ?>


<?php 
if (@$_GET['durum']=="Guncellenmedi") { ?>
<script>Swal.fire("Site Ayarları", "Güncellenmedi !", "error"); </script>
<?php } ?>

        <div id="layout-wrapper">

            
            <?php include("inc/topbar.php");?>
<?php include("inc/sol-menu.php");?>
           
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                       
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Site Ayarları </h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="./">Anasayfa</a></li>
                                            <li class="breadcrumb-item active">Site Ayarları</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                    

                        <div class="row">
                        <form  action="kontroller/post.php" method="post" enctype="multipart/form-data">
                        <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <ul class="nav nav-tabs nav-justified nav-tabs-custom" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#custom-home" role="tab">
                                                    <i class="dripicons-home me-1 align-middle"></i> <span class="d-none d-md-inline-block">Site Ayarları</span> 
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#custom-profile" role="tab">
                                                    <i class="dripicons-user me-1 align-middle"></i> <span class="d-none d-md-inline-block">İletişim Ayarları</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#custom-messages" role="tab">
                                                    <i class="dripicons-mail me-1 align-middle"></i> <span class="d-none d-md-inline-block">Sosyal Medya</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#custom-settings" role="tab">
                                                    <i class="dripicons-gear me-1 align-middle"></i> <span class="d-none d-md-inline-block">Logo Ayarları</span>
                                                </a>
                                            </li>
                                            
                                             <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#mail-settings" role="tab">
                                                    <i class="dripicons-gear me-1 align-middle"></i> <span class="d-none d-md-inline-block">Mail Ayarları</span>
                                                </a>
                                            </li>
                                        </ul>
        
                               
                                        <div class="tab-content p-3">
                                            <div class="tab-pane active" id="custom-home" role="tabpanel">
                                                <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                      <input type="hidden" value="../ayarlar.php" name="link">
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Site Adı</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="site_title" value="<?=$ayar['site_title']?>" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">Site Description</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="site_description" value="<?=$ayar['site_description']?>" id="example-search-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Site Author</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="site_author" value="<?=$ayar['site_author']?>" id="example-email-input">
                                            </div>
                                        </div>
                                        
                                          <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Footer Copyright </label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="footer_copyright" value="<?=$ayar['footer_copyright']?>" id="example-text-input">
                                            </div>
                                        </div>
                                      
                                        <div class="mb-3 row">
                                            <label for="example-color-input" class="col-md-2 col-form-label">Site Renk </label>
                                            <div class="col-md-10">
                                                <input type="color" class="form-control form-control-color mw-100" name="site_renk" id="exampleColorInput" value="<?=$ayar['site_renk']?>"
                                                    title="Choose your color">
                                                    
                                            </div>
                                        </div>
                                        
                                        
                                       

                                      
                                    </div>
                                </div>
                            </div>
                        
           

                        
                                            </div>
                                            <div class="tab-pane" id="custom-profile" role="tabpanel">
                                                <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Telefon Numarası 1</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="<?=$ayar['telefon1']?>" name="telefon1" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">Telefon Numarası 2</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="<?=$ayar['telefon2']?>" name="telefon2" id="example-search-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Whatsapp Numarası</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="<?=$ayar['whatsapp']?>" name="whatsapp" id="example-email-input">
                                            </div>
                                        </div>
                                         <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Email 1 </label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="<?=$ayar['email1']?>" name="email1" id="example-email-input">
                                            </div>
                                        </div>
                                         <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Email 2 </label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="<?=$ayar['email2']?>" name="email2" id="example-email-input">
                                            </div>
                                        </div>
                                         <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Adres 1 </label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="<?=$ayar['adres1']?>" name="adres1" id="example-email-input">
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Adres 2 </label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="<?=$ayar['adres2']?>"  name="adres2" id="example-email-input">
                                            </div>
                                        </div>
                                        
                                 
                                        
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Google Maps </label>
                                            <div class="col-md-10">
                                                  <textarea required class="form-control" name="google_maps" rows="5"><?=$ayar['google_maps']?></textarea>
                                            </div>
                                        </div>
                                            </div>
                                            <div class="tab-pane" id="custom-messages" role="tabpanel">
                                                 <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Facebook Linki</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="<?=$ayar['facebook']?>" name="facebook" id="example-text-input">
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Twitter Linki</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="<?=$ayar['twitter']?>" name="twitter" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Linkedin Linki</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="<?=$ayar['linkedin']?>" name="linkedin" id="example-text-input">
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Telegram Linki</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="<?=$ayar['telegram']?>" name="telegram" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Youtube Linki</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="<?=$ayar['youtube']?>" name="youtube" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">İnstagram Linki</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="<?=$ayar['instagram']?>" name="instagram" id="example-text-input">
                                            </div>
                                        </div>
                                            </div>
                                            <div class="tab-pane" id="custom-settings" role="tabpanel">
                                                <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Logo </label>
                                            <div class=" col-md-2"><img src="../resimler/<?=$ayar['logo']?>" width="100%"></div>
                                            <div class="col-md-8">
                                                <input class="form-control" type="file" value="Artisanal kale" name="logo" id="example-text-input">
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Footer Logo </label>
                                            <div class=" col-md-2"><img src="../resimler/<?=$ayar['footer_logo']?>" width="100%"></div>
                                            <div class="col-md-8">
                                                <input class="form-control" type="file" value="Artisanal kale" name="footer_logo" id="example-text-input">
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Favicon Logo </label>
                                            <div class=" col-md-2"><img src="../resimler/<?=$ayar['favicon']?>" width="100%"></div>
                                            <div class="col-md-8">
                                                <input class="form-control" type="file" value="Artisanal kale" name="favicon" id="example-text-input">
                                            </div>
                                        </div>
                                            </div>
                                            <div class="tab-pane" id="mail-settings" role="tabpanel">
                                               <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Site Mail </label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="<?=$ayar['site_mail']?>" name="site_mail" id="example-email-input">
                                            </div>
                                        </div>
                                        
                                         <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Site Mail Şifre</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="<?=$ayar['site_mail_sifre']?>" name="site_mail_sifre" id="example-email-input">
                                            </div>
                                        </div>
                                        
                                         <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Site Mail Host</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="<?=$ayar['site_mail_host']?>" name="site_mail_host" id="example-email-input">
                                            </div>
                                        </div>
                                        
                                         <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Site Mail Port</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="<?=$ayar['site_mail_port']?>" name="site_mail_port" id="example-email-input">
                                            </div>
                                        </div>
                                        
                                          <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Gönderen Email</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="<?=$ayar['gonderen_email']?>" name="gonderen_email" id="example-email-input">
                                            </div>
                                        </div>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                        
                         <button type="submit" name="site-ayarlar-guncelle" class="btn btn-primary waves-effect waves-light">
                                                <i class="ri-check-line align-middle me-2"></i> Site Ayarları Güncelle
                                            </button>
                                            
                                            </form>
                        </div>
                   

                    </div>
                   
                </div>
           

              <?php include("inc/footer.php");?>

            </div>
            

        </div>
        
        <div class="rightbar-overlay"></div>

 
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

</html>