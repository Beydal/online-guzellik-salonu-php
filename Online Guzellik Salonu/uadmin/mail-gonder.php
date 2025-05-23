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
        <title>Mail Gönder - <?=$ayar['site_title']?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <meta content="<?=$ayar['site_description']?>" />
        <meta content="<?=$ayar['site_author']?>" name="author" />
  
        <link rel="shortcut icon" href="../resimler/<?=$ayar['favicon']?>">

             <script type="text/javascript" src="sweetalert2.all.min.js"></script>

        <link href="assets/libs/quill/quill.core.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/quill/quill.snow.css" rel="stylesheet" type="text/css" />

        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>
    <?php 
if (@$_GET['durum']=="Gonderildi") { ?>
<script>Swal.fire("Mail ", " Başarıyla Gönderildi", "success"); </script>
<?php } ?>


<?php 
if (@$_GET['durum']=="Gonderilmedi") { ?>
<script>Swal.fire("Mail ", "Gönderilmedi !", "error"); </script>
<?php } ?>
    <body data-sidebar="dark">
    

        <div id="layout-wrapper">

            
           <?php include("inc/topbar.php");?>
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                  <?php include("inc/sol-menu.php");?>
                </div>
            </div>
            
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                      
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Email Gönder</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="./">Anasayfa</a></li>
                                            <li class="breadcrumb-item active">Email Gönder</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                    

                        <div class="row mb-4">
                            

                            <div class="col-xl-12">
                               
                                
                                <div class="card">
                                    <div class="card-body">
<form method="post" action="kontroller/post.php">
                                        <div>
                                            <div class="mb-3">
                                                <input type="text" class="form-control" placeholder="Email" name="email[]">
                                            </div>

                                            <div class="mb-3">
                                                <input type="text" class="form-control" placeholder="Konu" name="konu">
                                                <input type="hidden" class="form-control" placeholder="../mail-gonder.php" name="link">
                                            </div>

                                            <div class="mb-3">
                                               <textarea  class="ckeditor" name="mesaj"  rows="10"></textarea>
                                            </div>

                                            <div class="btn-toolbar mb-0">
                                                <div class="">
                                                   
                                                    <button class="btn btn-info waves-effect waves-light" name="mail-gonder"> <span>Gönder</span> <i class="fab fa-telegram-plane ms-2"></i> </button>
                                                </div>
                                            </div>
                                        </div>
</form>
                                    </div>

                                </div>

                            </div>
                        </div>
                 
                    </div> 
                </div>
                
                
                
            </div>
            <?php include("inc/footer.php");?>

        </div>

        <div class="rightbar-overlay"></div>

        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
<script src="ckeditor-2/ckeditor.js"></script>
        <script src="assets/libs/quill/quill.min.js"></script>

        <script src="assets/js/pages/email-editor.init.js"></script>
 
        <script src="assets/js/app.js"></script>

    </body>
</html>
