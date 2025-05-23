<section class="team-area pb-100">
			<div class="container">
				<div class="section-title">
					<h2>Uzman Kadromuz</h2>
				</div>

				<div class="row">
                
                                                      <?php
            $cek=$db->query("select * from ekibimiz where durum='on' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
			foreach($cek as $goster){
			?>
					<div class="col-lg-3 col-sm-6">
						<div class="single-team bg-feebea">
							<img src="resimler/<?=$goster['resim']?>" alt="<?=$goster['adi']?>">
							<h3><a href="#"><?=$goster['adi']?></a></h3>
							<span class="profession"><?=$goster['unvan']?></span>

							
						</div>
					</div>

			<?php }?>
					<div class="col-12">
						<div class="full-team">
							<a href="ekibimiz" class="default-btn">
							Tüm Ekibimiz
								<i class="ri-arrow-right-circle-line"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>