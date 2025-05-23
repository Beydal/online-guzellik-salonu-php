
		<section class="blog-details-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="blog-details-top-content">
							<div class="row">
								<div class="blog-details-content blog-details-content-1">
									<div class="blog-img">
										<img src="resimler/<?=$haberler['resim']?>" alt="<?=$haberler['adi']?>">

										
									</div>
			
									<div class="blog-content">
										

										<h3><?=$haberler['adi']?></h3>
			
										<p><?=$haberler['aciklama']?></p>
									</div>
								</div>

								
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="widget-sidebar">
							

							

							<div class="sidebar-widget recent-post">
								<h3 class="widget-title">Diğer Bloglar </h3>
								
								<ul>
                                
                                             <?php
            $cek=$db->query("select * from haberler where durum='on' and not id='$id' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
			foreach($cek as $goster){
			?>
									<li>
										<a href="<?=$goster['seo']?>">
											<?=$goster['adi']?>
											<img src="resimler/<?=$goster['resim']?>" alt="<?=$goster['adi']?>" width="100">
										</a>
										<span><?=$goster['tarih']?></span>
									</li>
								<?php }?>
								</ul>
							</div>
	
							
						</div>
					</div>
				</div>
			</div>
		</section>
