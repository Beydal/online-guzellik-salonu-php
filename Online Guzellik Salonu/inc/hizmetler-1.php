<section class="services-area services-area-style-two ptb-100">
			<div class="container">
				<div class="section-title">
					<h2>Hizmetler</h2>
				</div>

				<div class="row">
                
                    <?php
            $cek=$db->query("select * from hizmetler where durum='on' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
			foreach($cek as $goster){
			?>
					<div class="col-lg-4 col-md-6">
						<div class="single-services">
							<div class="services-icon">
								<img src="resimler/<?=$goster['resim']?>" alt="<?=$goster['adi']?>">
							</div>
							<h3><?=$goster['adi']?></h3>
							<p><?=$goster['onaciklama']?></p>

							<a href="<?=$goster['seo']?>" class="read-more">
								İnceleyin
							</a>
						</div>
					</div>
<?php }?>
					

					
					
					
					<div class="col-12">
						<div class="check-procedures">
							<a href="hizmetler" class="read-more">
								Tüm Hizmetler
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>