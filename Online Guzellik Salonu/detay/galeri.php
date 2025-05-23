	
	
		<div class="gallery-area gallery-popup pt-100 pb-70">
			<div class="container">
				

				<div class="shorting">
					<div class="row">
                    				                                                      <?php
            $cek=$db->query("select * from galeri where durum='on' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
			foreach($cek as $goster){
			?>
						<div class="col-lg-6 col-md-6 mix face-lift">
							<div class="gallery-item">
								<img src="resimler/<?=$goster['resim']?>" alt="<?=$goster['adi']?>">
		
								<div class="gallery-item-content">
									<div class="gallery-link">
										<a href="resimler/<?=$goster['resim']?>" class="img">
											<i class="ri-add-fill"></i>
										</a>
										
										<p><?=$goster['adi']?></p>
									</div>
								</div>
							</div>
						</div>

	<?php }?>
					</div>
				</div>
			</div>
		</div>
		