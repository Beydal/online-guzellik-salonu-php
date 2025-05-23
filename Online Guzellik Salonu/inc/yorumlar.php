<section class="reviews-patients-area reviews-patients-area-style-two reviews-patients-area-style-three pt-100">
			<div class="container">
				<div class="section-title">
					<h2>Müşteri Yorumları</h2>
				</div>

				<div class="reviews-patients-slider-style-two owl-carousel owl-theme">
                
                                                                  <?php
            $cek=$db->query("select * from yorumlar where durum='on' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
			foreach($cek as $goster){
			?>
					<div class="single-reviews-patients">
						<div class="avatar">
							<img src="resimler/<?=$goster['resim']?>" alt="<?=$goster['adi']?>" style="width:100px!important">
							<i class="ri-double-quotes-l"></i>
						</div>
						
						<p><?=$goster['aciklama']?></p>

						<h3><?=$goster['adi']?></h3>
						<span><?=$goster['unvan']?></span>
					</div>

					<?php }?>

					
				</div>
			</div>
		</section>