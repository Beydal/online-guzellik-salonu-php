 <?php
include("kontroller/baglan.php");
include("kontroller/fonksiyonlar.php");
  ob_start();
session_start();


oturumkontrol();
if (isset($_POST['id'])) {
	$sorgu=$db->prepare("SELECT * FROM yonetici WHERE id=:id");
	$sorgu->execute(array('id' => $_POST['id']));
	$yonetici=$sorgu->fetch(PDO::FETCH_ASSOC);
}
$id = $_POST['id'];
?>
<!doctype html>
<html lang="tr">

    <head>
        
        <meta charset="utf-8" />
        <title>Yönetici Ekle - <?=$ayar['site_title']?></title>
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
if (@$_GET['durum']=="Eklendi") { ?>
<script>Swal.fire("Yönetici ", " Başarıyla Eklendi", "success"); </script>
<?php } ?>


<?php 
if (@$_GET['durum']=="Eklenmedi") { ?>
<script>Swal.fire("Yönetici ", "Eklenmedi !", "error"); </script>
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
                                    <h4 class="mb-sm-0">Yönetici Ekle  </h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="yonetici-listele.php">Yönetici Listele</a></li>
                                            <li class="breadcrumb-item active">Yönetici Ekle </li>
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
                                         <?php if($_POST['id']!=''){?>
                                      <input type="hidden" value="../yonetici-listele.php" name="link">
                                      <?php } else {?>
                                      <input type="hidden" value="../yonetici-ekle.php" name="link">
                                      <?php }?>
                                       <input type="hidden" value="<?=$id?>" name="id">
                                       
                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">Yönetici Email </label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="adi" value="<?=$yonetici['adi']?>" id="example-search-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label"> Yönetici Şifre </label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="password" name="sifre" value="<?=$yonetici['normalsifre']?>" id="example-email-input">
                                            </div>
                                        </div>
                                       
                                       
                                            
                                            
                                     
        
                               
                                      
                                    </div>
                                </div>
                            </div>
                        
                        <?php if($_POST['id']==''){?>
                         <button type="submit" name="yonetici-ekle" class="btn btn-primary waves-effect waves-light">
                                                <i class="ri-check-line align-middle me-2"></i> Yeni Yönetici Ekle
                                            </button>
                                            <?php } else {?>
                                              <button type="submit" name="yonetici-guncelle" class="btn btn-primary waves-effect waves-light">
                                                <i class="ri-check-line align-middle me-2"></i>  Yönetici Güncelle
                                            </button>
                                            <?php }?>
                                            
                                            
                                            </form>
                        </div>
                   

                    </div>
                   
                </div>
           

              <?php include("inc/footer.php");?>

            </div>
            

        </div>
        
        <div class="rightbar-overlay"></div>

  <script src="ckeditor-2/ckeditor.js"></script>
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

</html>