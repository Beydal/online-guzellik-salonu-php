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
        <title>İstatikler - <?=$ayar['site_title']?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="<?=$ayar['site_description']?>" name="description" />
        <meta content="<?=$ayar['site_author']?>" name="author" />
        <link rel="shortcut icon" href="../resimler/<?=$ayar['favicon']?>">
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />     
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
     <script type="text/javascript" src="sweetalert2.all.min.js"></script>
    </head>

    <body data-sidebar="dark">
    <?php 
if (@$_GET['durum']=="Silindi") { ?>
<script>Swal.fire("İstatik", " Başarıyla Silindi", "success"); </script>
<?php } ?>


<?php 
if (@$_GET['durum']=="Silinmedi") { ?>
<script>Swal.fire("İstatik", "Silinmedi !", "error"); </script>
<?php } ?>
    <?php 
if (@$_GET['durum']=="Guncellendi") { ?>
<script>Swal.fire("İstatik", " Başarıyla Güncellendi", "success"); </script>
<?php } ?>


<?php 
if (@$_GET['durum']=="Guncellenmedi") { ?>
<script>Swal.fire("İstatik", "Güncellenmedi !", "error"); </script>
<?php } ?>
   
        <div id="layout-wrapper">

            
            <?php
			include("inc/topbar.php");
            include("inc/sol-menu.php");
			?>

           
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                     
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">İstatikler </h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="istatik-ekle.php">İstatik Ekle</a></li>
                                            <li class="breadcrumb-item active">İstatikler</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                      
        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        											<a href="istatik-ekle" class="btn btn-success waves-effect waves-light">
                                                <i class="ri-add-box-line align-middle me-2"></i> İstatik Ekleyin
                                            </a><br><br>
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Sira</th>
                                               
                                                <th>Adı</th>
                                              
                                                 <th>Açıklama</th>
                                               
                                                <th>İcon</th>
                                                <th>İşlem</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            
                                            <?php
                                            $ilancek=$db->query("select * from istatik order by id desc")->fetchAll(PDO::FETCH_ASSOC);
											foreach($ilancek as $ilan){
											?>
                                            <tr>
                                                <td><?=$ilan['sira']?> </td>
                                                <td><?=$ilan['adi']?></td>
                                                
                                               
                                                <td><?=substr($ilan['aciklama'],0,20)?></td>
                                          <td><?=$ilan['icon']?></td>
                                                
                                                <td>
                                                <form method="post" action="istatik-ekle.php">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light" name="ilan-guncelle" style="float:left;margin-right:10px">
                                                <i class="ri-edit-box-fill  "></i> 
                                            </button>
                                            
                                             <input type="hidden" name="id" value="<?=$ilan['id']?>">
                                            </form>
                                            <form method="post" action="kontroller/post.php">
                                            <button type="submit"  name="istatik-sil" class="btn btn-primary waves-effect waves-light" style="float:left">
                                                <i class="ri-close-line  "></i> 
                                            </button>
                                            <input type="hidden" name="link" value="../istatik-listele.php">
                                            <input type="hidden" name="id" value="<?=$ilan['id']?>">
                                            </form>
                                            
                                            </td>
                                            </tr>
                                           
                                           <?php }?> 
                                        
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> 
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
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script src="assets/js/pages/datatables.init.js"></script>
        <script src="assets/js/app.js"></script>

    </body>
</html>
