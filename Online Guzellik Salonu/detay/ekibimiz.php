<section class="team-area pt-100 pb-70">
			<div class="container">
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

			
				</div>
			</div>
		</section>