<?php
include("kontroller/baglan.php");
include("kontroller/fonksiyonlar.php");

    ob_start();
session_start();


oturumkontrol();

if (isset($_POST['id'])) {
	$sorgu=$db->prepare("SELECT * FROM referanslar WHERE id=:id");
	$sorgu->execute(array('id' => $_POST['id']));
	$referanslar=$sorgu->fetch(PDO::FETCH_ASSOC);
}
$id = $_POST['id'];
?>
<!doctype html>
<html lang="tr">

    <head>
        
        <meta charset="utf-8" />
        <title>Referans Ekle - <?=$ayar['site_title']?></title>
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
<script>Swal.fire("Referans ", " Başarıyla Eklendi", "success"); </script>
<?php } ?>


<?php 
if (@$_GET['durum']=="Eklenmedi") { ?>
<script>Swal.fire("Referans ", "Eklenmedi !", "error"); </script>
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
                                    <h4 class="mb-sm-0">Referans Ekle  </h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="referans-listele.php">Referans Listele</a></li>
                                            <li class="breadcrumb-item active">Referans Ekle </li>
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
                                      <input type="hidden" value="../referans-listele.php" name="link">
                                      <?php } else {?>
                                      <input type="hidden" value="../referans-ekle.php" name="link">
                                      <?php }?>
                                      
                                      <input type="hidden" value="<?=$id?>" name="id">
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Referans Sirası</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="sira" value="<?=$referanslar['sira']?>" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">Referans Adı </label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="adi" value="<?=$referanslar['adi']?>" id="example-search-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Referans Linki </label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="linki" value="<?=$referanslar['linki']?>" id="example-email-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Logo </label>
                                            <div class=" col-md-2"><img src="../resimler/<?=$referanslar['resim']?>" width="100%"></div>
                                            <div class="col-md-8">
                                                <input class="form-control" type="file"  name="resim" id="example-text-input">
                                            </div>
                                        </div>
                                        <input class="form-check form-switch" type="checkbox"  id="switch1" checked="" switch="none" name="durum">
                                        <label class="form-label" for="switch1" data-on-label="Aktif" data-off-label="Pasif"></label>
        
                               
                                      
                                    </div>
                                </div>
                            </div>
                        
                          <?php if($_POST['id']==''){?>
                         <button type="submit" name="referans-ekle" class="btn btn-primary waves-effect waves-light">
                                                <i class="ri-check-line align-middle me-2"></i> Yeni Referans Ekle
                                            </button>
                                            <?php } else {?>
                                              <button type="submit" name="referans-guncelle" class="btn btn-primary waves-effect waves-light">
                                                <i class="ri-check-line align-middle me-2"></i>  Referans Güncelle
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

 
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

</html>