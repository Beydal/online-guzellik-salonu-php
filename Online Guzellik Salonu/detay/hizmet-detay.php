<section class="procedures-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="procedures-content procedures-content-1">
							<div class="procedures-img">
								<img src="resimler/<?=$hizmetler['resim']?>" alt="<?=$hizmetler['adi']?>">
							</div>
							<h3><?=$hizmetler['adi']?></h3>
							<p><?=$hizmetler['aciklama']?></p>
						</div>

				

						<div class="procedures-content procedures-content-4">
							<div class="before-after-img-area">
								<div class="row">
							<?php
                            $imgcek=$db->query("select * from urun_img where urun_id='$id' and tur='hizmetler'")->fetchAll(PDO::FETCH_ASSOC);
							foreach($imgcek as $img){
							?>
									<div class="col-lg-6 col-md-6">
										<div class="before-after-img">
											<img src="resimler/<?=$img['img']?>" alt="<?=$hizmetler['adi']?>">
										</div>
									</div>
<?php }?>
									
								</div>
							</div>
						</div>

						
					</div>

					<div class="col-lg-4">
						<div class="widget-sidebar">
							<div class="sidebar-widget categories">
								<h3>Diğer Hizmetler</h3>
	
								<ul>
                                             <?php
            $cek=$db->query("select * from hizmetler where durum='on' and not id='$id' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
			foreach($cek as $goster){
			?>
									<li >
										<a href="<?=$goster['seo']?>" >
											<?=$goster['adi']?>
										</a>
									</li>
									<?php }?>
								</ul>
							</div>

						
						</div>
					</div>
				</div>
			</div>
		</section>