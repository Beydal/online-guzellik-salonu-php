<?php
include("kontroller/baglan.php");
include("kontroller/fonksiyonlar.php");

if (isset($_POST['id'])) {
	$sorgu=$db->prepare("SELECT * FROM ilanlar WHERE id=:id");
	$sorgu->execute(array('id' => $_POST['id']));
	$ilan=$sorgu->fetch(PDO::FETCH_ASSOC);
}
$id = $_POST['id'];


?>
<!doctype html>
<html lang="tr">

    <head>
        
        <meta charset="utf-8" />
        <title>İlan Ekle - <?=$ayar['site_title']?></title>
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
<script>Swal.fire("İlan", " Başarıyla Eklendi", "success"); </script>
<?php } ?>


<?php 
if (@$_GET['durum']=="Eklenmedi") { ?>
<script>Swal.fire("İlan", "Eklenmedi !", "error"); </script>
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
                                    <h4 class="mb-sm-0">İlan Ekle </h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="ilan-listele.php">İlan Listele</a></li>
                                            <li class="breadcrumb-item active">İlan Ekle</li>
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
                                           
                                        </ul>
        
                               
                                        <div class="tab-content p-3">
                                            <div class="tab-pane active" id="custom-home" role="tabpanel">
                                                <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
										<?php if($_POST['id']!=''){?>
                                      <input type="hidden" value="../ilan-listele.php" name="link">
                                      <?php } else {?>
                                      <input type="hidden" value="../ilan-ekle.php" name="link">
                                      <?php }?>
                                      <input type="hidden" value="<?=$id?>" name="id">
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">İlan Adı</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="ilan_adi" value="<?=$ilan['ilan_adi']?>" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">İlan Fiyatı</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="fiyat" value="<?=$ilan['fiyat']?>" id="example-search-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">İlan Adres</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="adres" value="<?=$ilan['adres']?>" id="example-email-input">
                                            </div>
                                        </div>
                                        
                                           <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label"> İlan Açıklama </label>
                                            
                                            <div class="col-md-10">
                                                     <textarea  class="ckeditor" name="aciklama"  rows="10"><?=$ilan['aciklama']?></textarea>
                                            </div>
                                        </div>
                                      
                                      
                                        <input class="form-check form-switch" type="checkbox"  id="switch1" checked="" switch="none" name="durum">
                                        <label class="form-label" for="switch1" data-on-label="Aktif" data-off-label="Pasif"></label>
                                        
                                        
                                        
                                       

                                      
                                    </div>
                                </div>
                            </div>
                        
           

                        
                                            </div>
                                            <div class="tab-pane" id="custom-profile" role="tabpanel">
                                               

									

                                       <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Öne Çıkan Resim </label>
                                            <?php if($_POST['id']==''){?>
                                            <div class="col-md-10">
                                                <input class="form-control" type="file"  name="resim" id="example-text-input">
                                            </div>
                                            <?php } else {?>
                                            <div class="col-md-3">
                                                <img src="../resimler/<?=$ilan['resim']?>" width="100%">
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="file"  name="resim" id="example-text-input">
                                            </div>
                                            <?php }?>
                                        </div>
                                      
        
                                   <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Video Linki  </label>
                                            <div class="col-md-10">
                                                  <textarea  class="form-control" name="video" rows="5"><?=$ilan['video']?></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Google Maps </label>
                                            <div class="col-md-10">
                                                  <textarea  class="form-control" name="google_maps" rows="5"><?=$ilan['google_maps']?></textarea>
                                            </div>
                                        </div>
                                            </div>
                                            <div class="tab-pane" id="custom-messages" role="tabpanel">
                                                 
                                    
                               				                          <div class="row" id="resimler">
                            
                            	<div class="form-group row col-md-12" id="resimler">
                            
                            
                            	<?php
									$i = 0;
									
									$iddd=$_POST['id'];
									if($_POST['id']!=''){
										$cek = $db->query("SELECT * FROM urun_img WHERE urun_id = '$id' and tur='ilanlar' order by id asc", PDO::FETCH_ASSOC);
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
                                </div>
                            </div>
                        <?php if($_POST['id']==''){?>
                         <button type="submit" name="ilan-ekle" class="btn btn-primary waves-effect waves-light">
                                                <i class="ri-check-line align-middle me-2"></i> Yeni İlan Ekle
                                            </button>
                                            <?php } else {?>
                                              <button type="submit" name="ilan-guncelle" class="btn btn-primary waves-effect waves-light">
                                                <i class="ri-check-line align-middle me-2"></i>  İlan Güncelle
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