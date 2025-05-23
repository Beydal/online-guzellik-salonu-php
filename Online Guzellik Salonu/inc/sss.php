<section class="surgical-area surgical-area-style-two surgical-area-style-three pt-100 pb-70">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="surgical-img">
							<img src="assets/images/reviews/surgical-img-2.jpg" alt="Image">
							
							<div class="surgical-img-bg">
								<img src="assets/images/reviews/surgical-img-bg.png" alt="Image">
							</div>

							<div class="shape shape-2">
								<img src="assets/images/reviews/shape-2.png" alt="">
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="surgical-content">
							<h2>Sıkça Sorulan Sorular</h2>
					

							<div class="faq-accordion">
								<ul class="accordion">
                                              <?php
            $cek=$db->query("select * from sss where durum='on' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
			foreach($cek as $goster){
			?>
									<li class="accordion-item">
										<a class="accordion-title " href="javascript:void(0)">
											<i class="ri-checkbox-circle-fill"></i>
											<?=$goster['adi']?>
										</a>
		
										<div class="accordion-content show">
											<p><?=$goster['aciklama']?></p>
										</div>
									</li>
	<?php }?>
								</ul>
							</div>

							<a href="sss" class="default-btn">
								Tüm Sorular
								<i class="ri-arrow-right-circle-line"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>