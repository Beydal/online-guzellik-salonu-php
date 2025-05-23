<?php
include("kontroller/baglan.php");
include("kontroller/fonksiyonlar.php");

    ob_start();
session_start();


oturumkontrol();
if (isset($_POST['id'])) {
	$sorgu=$db->prepare("SELECT * FROM hizmetler WHERE id=:id");
	$sorgu->execute(array('id' => $_POST['id']));
	$hizmetler=$sorgu->fetch(PDO::FETCH_ASSOC);
}
$id = $_POST['id'];
?>
<!doctype html>
<html lang="tr">

    <head>
        
        <meta charset="utf-8" />
        <title>Hizmet Ekle - <?=$ayar['site_title']?></title>
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
<script>Swal.fire("Hizmet ", " Başarıyla Eklendi", "success"); </script>
<?php } ?>


<?php 
if (@$_GET['durum']=="Eklenmedi") { ?>
<script>Swal.fire("Hizmet ", "Eklenmedi !", "error"); </script>
<?php } ?>

  <?php 
if (@$_GET['durum']=="Guncellendi") { ?>
<script>Swal.fire("Hizmet ", " Başarıyla Güncellendi", "success"); </script>
<?php } ?>


<?php 
if (@$_GET['durum']=="Guncellenmedi") { ?>
<script>Swal.fire("Hizmet ", "Güncellenmedi !", "error"); </script>
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
                                    <h4 class="mb-sm-0">Hizmet Ekle  </h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="hizmet-listele.php">Hizmet Listele</a></li>
                                            <li class="breadcrumb-item active">Hizmet Ekle </li>
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
                                      <input type="hidden" value="../hizmet-listele.php" name="link">
                                      <?php } else {?>
                                      <input type="hidden" value="../hizmet-ekle.php" name="link">
                                      <?php }?>
                                         <input type="hidden" value="<?=$_POST['id']?>" name="id">
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Hizmet Sirası</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="sira" value="<?=$hizmetler['sira']?>" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">Hizmet Adı </label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="adi" value="<?=$hizmetler['adi']?>" id="example-search-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Hizmet Ön Açıklama </label>
                                            <div class="col-md-10">
                                              <textarea required class="form-control" name="onaciklama" rows="5"><?=$hizmetler['onaciklama']?></textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label"> Hizmet Resim </label>
                                            <?php if($_POST['id']!=''){?>
                                            <div class=" col-md-2"><img src="../resimler/<?=$hizmetler['resim']?>" width="100%"></div>
                                            <div class="col-md-8">
                                                <input class="form-control" type="file"  name="resim" id="example-text-input">
                                            </div>
                                            <?php } else {?>
                                             <div class="col-md-10">
                                                <input class="form-control" type="file"  name="resim" id="example-text-input">
                                            </div>
                                            <?php }?>
                                        </div>
                                       
                                            
                                             <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label"> Hizmet Açıklama </label>
                                            
                                            <div class="col-md-10">
                                                     <textarea  class="ckeditor" name="aciklama"  rows="10"><?=$hizmetler['aciklama']?></textarea>
                                            </div>
                                        </div>
                                        <input class="form-check form-switch" type="checkbox"  id="switch1" checked="" switch="none" name="durum">
                                        <label class="form-label" for="switch1" data-on-label="Aktif" data-off-label="Pasif"></label>
         <div class="row" id="resimler">
                            
                            	<div class="form-group row col-md-12" id="resimler">
                            
                            
                            	<?php
									$i = 0;
									
									$iddd=$_POST['id'];
									if($_POST['id']!=''){
										$cek = $db->query("SELECT * FROM urun_img WHERE urun_id = '$id' and tur='hizmetler' order by id asc", PDO::FETCH_ASSOC);
										if($cek->rowCount()){
											foreach( $cek as $c ){
												echo '<div class="col-md-3" data-resim-dis-id="'.$i.'">
									                    <div class="uploaddis pasif" style="float:left;">
									        			  <div class="yuklendi">
									        				  <img src="../resimler/'.$c['img'].'" width="100%">
									        				  <div class="icon" data-resim-sil-id="'.$i.'"><span class="fa fa-trash"></span></div>
									        				  <input type="hidden" name="img[]" value="'.$c['img'].'" required="">
									        			  </div>
									        			</div>
									                </div>';
									            $i++;
											}
										}
									}
								?>
                            </div>
                            
                            	<div class="form-group row col-md-12">
                             <div class="col-md-4 " style="margin:auto;padding:auto;">
				                    <div class="uploaddis aktif" data-id="1" style="margin:0 auto;">
				        			  <div class="upload1">
				        				  <span class="metin" style="width: 100%;float: left;">Çoklu Resim Yükle</span>
				        				  <div class="icon"><span class="fa fa-upload" data-id="1"></span></div>
				        			  </div>
				        			</div>
				                </div>
                            
                            
                            </div>
                            
                            
                            
                            
                            
                            
				
					
				</div>
<div id="queue"></div>
                               
                               
                                      
                                    </div>
                                </div>
                            </div>
                        
                       <?php if($_POST['id']==''){?>
                         <button type="submit" name="hizmet-ekle" class="btn btn-primary waves-effect waves-light">
                                                <i class="ri-check-line align-middle me-2"></i> Yeni Hizmet Ekle
                                            </button>
                                            <?php } else {?>
                                              <button type="submit" name="hizmet-guncelle" class="btn btn-primary waves-effect waves-light">
                                                <i class="ri-check-line align-middle me-2"></i>  Hizmet Güncelle
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
<link rel="stylesheet" href="assets/uploadfive/uploadifive.css" type="text/css">
    	<script src="assets/uploadfive/jquery.uploadifive.min.js" type="text/javascript"></script>
    		<script type="text/javascript">
	    $(document).ready(function(){

	      	var date = new Date();
	        var date_time = date.getTime();
	        $('.upload .icon span').uploadifive({
	            'auto'             : true,
	            'queueID'  : 'queue',
	            'fileSizeLimit' : '15360KB',
	            'fileExt'     : '*.jpg;*.jpeg;*.JPG;*.JPEG;*.png;*.PNG;*.svg;*.gif',
	            'width' : 25,
	            'buttonText' : " ",
	            'formData'         : {'timestamp' : date_time,'token' : 'sayim'+date_time+'sayim'},
	            'uploadScript'     : 'assets/uploadfive/uploadifive.php',
	            'removeCompleted' : true,
	            'onUploadComplete' : function(file, data) {
	                if(data == '2'){
	                    alert('Lütfen Geçerli Fortmatta Yükleme Yapınız.');
	                }else if(data == '3'){
	                    alert('İşlem Başarısız.(Dosya Boyutu İle Alakalı Olabilir.)');
	                }else{
	                    var id = $(this).attr('data-id');
	                    $('input[name="img'+id+'"]').val(data);
	                    $('#url').val('<?php echo $site; ?>resimler/'+data);
	                    $('.uploaddis[data-id="'+id+'"] .yuklendi img').attr('src','../resimler/'+data);
	                    $('.uploaddis[data-id="'+id+'"]').removeClass('aktif');
	                    $('.uploaddis[data-id="'+id+'"]').addClass('pasif');
	                }
	            }
	        });

	        $('.upload1 .icon span').uploadifive({
	            'auto'             : true,
	            'queueID'  : 'queue',
	            'fileSizeLimit' : '15360KB',
	            'fileExt'     : '*.jpg;*.jpeg;*.JPG;*.JPEG;*.png;*.PNG;*.svg;*.gif',
	            'width' : 25,
	            'buttonText' : " ",
	            'formData'         : {'timestamp' : date_time,'token' : 'sayim'+date_time+'sayim'},
	            'uploadScript'     : 'assets/uploadfive/uploadifive.php',
	            'removeCompleted' : true,
	            'onUploadComplete' : function(file, data) {
	                if(data == '2'){
	                    alert('Lütfen Geçerli Fortmatta Yükleme Yapınız.');
	                }else if(data == '3'){
	                    alert('İşlem Başarısız.(Dosya Boyutu İle Alakalı Olabilir.)');
	                }else{
	                    var say = $('#resimler .col-md-3').length;
	                    $('#resimler').append('\
	                    	<div class="col-md-3" data-resim-dis-id="'+say+'">\
				                    <div class="uploaddis pasif" style="float:left;">\
				        			  <div class="yuklendi">\
				        				  <img src="../resimler/'+data+'" width="100%">\
				        				  <div class="icon" data-resim-sil-id="'+say+'"><span class="fa fa-trash"></span></div>\
				        				  <input type="hidden" name="img[]" value="'+data+'" required="">\
				        			  </div>\
				        			</div>\
				                </div>\
				        ');

	                }
	            }
	        });
	        $(document).on('click','[data-resim-sil-id]', function(){
	        	$('[data-resim-dis-id="'+$(this).attr('data-resim-sil-id')+'"]').remove();
	        });

	        $('.yuklendi .icon').click(function(){
	            var id = $(this).attr('data-id');
	            $('.uploaddis[data-id="'+id+'"]').removeClass('pasif');
	            $('.uploaddis[data-id="'+id+'"]').addClass('aktif');
	            $('input[name="img'+id+'"]').val('');
	            $('.uploaddis[data-id="'+id+'"] .yuklendi img').attr('src','');
	        });
	      });
	    </script>
        <script src="assets/js/app.js"></script>

    </body>

</html>