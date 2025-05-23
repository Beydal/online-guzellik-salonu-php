<div class="partner-area partner-area-style-three">
			<div class="partner-bg-top">
				<div class="container">
					<div class="partner-bg">
						<div class="partner-slider owl-carousel owl-theme">
                        
                                                                                                <?php
            $cek=$db->query("select * from referanslar where durum='on' order by sira asc limit 3")->fetchAll(PDO::FETCH_ASSOC);
			foreach($cek as $goster){
			?>
							<div class="partner-item">
								<a href="<?=$goster['linki']?>">
									<img src="resimler/<?=$goster['resim']?>" alt="<?=$goster['adi']?>">
								</a>
							</div>
	
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>