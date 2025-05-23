<section class="faq-area ptb-100">
			<div class="container">
				<div class="row">
					

					<div class="col-lg-12">
						<div class="faq-accordion">
							<ul class="accordion">
                                                                              <?php
            $cek=$db->query("select * from sss where durum='on' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
			foreach($cek as $goster){
			?>
								<li class="accordion-item">
									<a class="accordion-title " href="javascript:void(0)">
										<i class="ri-add-fill"></i>
										<?=$goster['adi']?>
									</a>
	
									<div class="accordion-content show">
										<p><?=$goster['aciklama']?></p>

										
									</div>
								</li>
<?php } ?>
						
							</ul>
						</div>

						
					</div>
				</div>
			</div>
		</section>