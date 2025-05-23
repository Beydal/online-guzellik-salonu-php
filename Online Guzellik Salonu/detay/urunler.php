<section class="product-area bg-color ptb-100">
			<div class="container">
				<div class="row">
                
                             <?php
            $cek=$db->query("select * from urunler where durum='on' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
			foreach($cek as $goster){
			?>
                
					<div class="col-lg-4 col-sm-6">
						<div class="single-product">
							<div class="product-img">
								<div class="product">
									<img src="resimler/<?=$goster['resim']?>" alt="<?=$goster['adi']?>">
								</div>

								<div class="cart-btn">
									<a href="<?=$goster['seo']?>" class="default-btn">
										İnceleyin
										<i class="ri-shopping-bag-line"></i>
									</a>
								</div>
							</div>

							<div class="best-selling-content">
								<h3>
									<a href="<?=$goster['seo']?>"><?=$goster['adi']?></a>
								</h3>
								
							</div>
						</div>
					</div>

		<?php }?>
					
				</div>
			</div>
		</section>