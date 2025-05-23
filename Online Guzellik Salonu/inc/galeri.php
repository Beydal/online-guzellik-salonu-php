<div class="before-after-area before-after-area-style-three bg-color ptb-100">
			<div class="container-fluid">
				<div class="section-title">
					<h2>Fotoğraf Galeri</h2>
				</div>

				<div class="row">
                              				                                                      <?php
            $cek=$db->query("select * from galeri where durum='on' order by sira asc limit 3")->fetchAll(PDO::FETCH_ASSOC);
			foreach($cek as $goster){
			?>
					<div class="col-lg-4">
						<div class="before-after-left-img">
							<img src="resimler/<?=$goster['resim']?>" alt="<?=$goster['adi']?>">
						</div>
					</div>
                    <?php }?>

					
					
				</div>
<br><br>
				<a href="galeri" class="read-more">
					Tüm Galeriyi Gör
				</a>
			</div>

			<div class="shape shape-1">
				<img src="assets/images/before-after/shape-1.png" alt="Image">
			</div>
			<div class="shape shape-2">
				<img src="assets/images/before-after/shape-2.png" alt="Image">
			</div>
		</div>