<section class="our-blog-area pb-70">
			<div class="container">
				<div class="section-title">
					<h2>Son 3 Blog</h2>
				</div>

				<div class="row">
                                                                             <?php
            $cek=$db->query("select * from haberler where durum='on' order by sira asc limit 3")->fetchAll(PDO::FETCH_ASSOC);
			foreach($cek as $goster){
			?>
					<div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<a href="<?=$goster['seo']?>">
								<img src="resimler/<?=$goster['resim']?>" alt="<?=$goster['adi']?>">
							</a>
	
							<div class="blog-content">
								<ul>
									<li>
										<span><?=$ayar['site_title']?></span>
									</li>
									<li>
										<a href="#"><?=$goster['tarih']?></a>
									</li>
								</ul>
	
								<h3>
									<a href="<?=$goster['seo']?>">
										<?=$goster['adi']?>
									</a>
								</h3>
	
								<p><?=$goster['onaciklama']?></p>
								
								<a href="<?=$goster['seo']?>" class="read-more">
									İnceleyin
								</a>
							</div>
						</div>
					</div>

					<?php }?>

					
				</div>
			</div>
		</section>