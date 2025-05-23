<section class="hero-slider-area hero-slider-area-style-three">
			<div class="hero-slider-style-two owl-carousel owl-theme">
            <?php
            $cek=$db->query("select * from slider where durum='on' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
			foreach($cek as $goster){
			?>
				<div class="hero-slider-item " style="  background-image: url(resimler/<?=$goster['resim']?>);">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="hero-slider-content">
									<span class="top-title"><?=$ayar['site_title']?></span>
									<h1><?=$goster['adi']?></h1>
									<p><?=$goster['aciklama']?></p>
		
									<div class="hero-slider-btn">
										<a href="<?=$goster['linki']?>" class="default-btn">
										İnceleyin
											<i class="ri-arrow-right-circle-line"></i>
										</a>
										<a href="iletisim" class="default-btn active">
											Randevu Al
											<i class="ri-file-text-line"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
<?php }?>
				
			</div>
		</section>