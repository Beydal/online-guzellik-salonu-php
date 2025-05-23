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
        <title><?=$ayar['site_title']?> - Yönetim Paneli</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta content="<?=$ayar['site_description']?>" name="description" />
        <meta content="<?=$ayar['site_author']?>" name="author" />
        <link rel="shortcut icon" href="../resimler/<?=$ayar['favicon']?>">
        <link href="assets/libs/jqvmap/jqvmap.min.css" rel="stylesheet" />
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

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
                                    <h4 class="mb-sm-0"><?=$ayar['site_title']?></h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Yönetim Paneli</a></li>
                                            <li class="breadcrumb-item active"><?=$ayar['site_title']?></li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                        
                        
                      
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        											 <h4 class="mb-sm-0">İletişim Formundan Gelenler</h4>
                                                    <br>
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                              
                                                <th>Ad Soyad</th>
                                                <th>Konu</th>
                                                 <th>Email</th>
                                                 <th>Telefon</th>
                                                 <th>Mesaj</th>
                                                <th>Eklenme Tarihi </th>
                                                
                                                <th>İşlem</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            
                                            <?php
                                            $ilancek=$db->query("select * from iletisimler order by id desc")->fetchAll(PDO::FETCH_ASSOC);
											foreach($ilancek as $ilan){
											?>
                                            <tr>
                                                <td><?=$ilan['id']?> </td>
                                               
                                                <td><?=$ilan['adsoyad']?></td>
                                                
                                                <td><?=$ilan['konu']?></td>
                                                <td><?=$ilan['email']?></td>
                                                <td><?=$ilan['telefon']?></td>
                                                   <td><?=$ilan['mesaj']?></td>
                                                      <td><?=$ilan['tarih']?></td>
                                                <td>
                                               
                                            <form method="post" action="kontroller/post.php">
                                            <button type="submit"  name="iletisim-sil" class="btn btn-primary waves-effect waves-light" style="float:left">
                                                <i class="ri-close-line  "></i> 
                                            </button>
                                            <input type="hidden" name="link" value="../index.php">
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
                        
                        
                        <br><br>
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        											 <h4 class="mb-sm-0">Randevu Formundan Gelenler</h4>
                                                    <br>
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                              
                                                <th>Ad Soyad</th>
                                                <th>Hizmet</th>
                                                 <th>Uzman</th>
                                                 <th>Email</th>
                                                 <th>Telefon</th>
                                                 <th>Mesaj</th>
                                                <th>Randevu Tarihi </th>
                                                 <th>Saat</th>
                                                <th>İşlem</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            
                                            <?php
                                            $ilancek=$db->query("select * from randevular order by id desc")->fetchAll(PDO::FETCH_ASSOC);
											foreach($ilancek as $ilan){
											?>
                                            <tr>
                                                <td><?=$ilan['id']?> </td>
                                               
                                                <td><?=$ilan['adsoyad']?></td>
                                                
                                                <td><?=$ilan['hizmet']?></td>
                                                <td><?=$ilan['uzman']?></td>
                                                <td><?=$ilan['email']?></td>
                                                <td><?=$ilan['telefon']?></td>
                                                   <td><?=$ilan['mesaj']?></td>
                                                      <td><?=$ilan['tarih']?></td>
                                                       <td><?=$ilan['saat']?></td>
                                                <td>
                                               
                                            <form method="post" action="kontroller/post.php">
                                            <button type="submit"  name="randevu-sil" class="btn btn-primary waves-effect waves-light" style="float:left">
                                                <i class="ri-close-line  "></i> 
                                            </button>
                                            <input type="hidden" name="link" value="../index.php">
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
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="assets/libs/jqvmap/jquery.vmap.min.js"></script>
        <script src="assets/libs/jqvmap/maps/jquery.vmap.usa.js"></script>
        <script src="assets/js/pages/dashboard.init.js"></script>
        <script src="assets/js/app.js"></script>

    </body>
</html>
