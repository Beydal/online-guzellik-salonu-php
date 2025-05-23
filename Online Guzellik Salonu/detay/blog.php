	
		<section class="our-blog-area ptb-100">
			<div class="container">
				<div class="row">
                
                 <?php
            $limit = 12;

$query = $db->prepare("SELECT * FROM haberler where durum='on'");
$query->execute();

$total_results = $query->rowCount();
$total_pages = ceil($total_results / $limit);

if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}

$starting_limit = (($page - 1) * $limit);
$sec=$db->query("SELECT * FROM haberler where durum='on' ORDER BY id DESC LIMIT $starting_limit,$limit",PDO::FETCH_ASSOC);
if($sec->rowCount()){foreach($sec as $sonuc){
			?>


					<div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<a href="<?=$sonuc['seo']?>">
								<img src="resimler/<?=$sonuc['resim']?>" alt="<?=$sonuc['adi']?>">
							</a>
	
							<div class="blog-content">
								<ul>
									<li>
										<span><?=$ayar['site_title']?></span>
									</li>
									<li>
										<a href="<?=$sonuc['seo']?>"><?=$sonuc['tarih']?></a>
									</li>
								</ul>
	
								<h3>
									<a href="<?=$sonuc['seo']?>">
										<?=$sonuc['adi']?>
									</a>
								</h3>
	
								<p><?=$sonuc['onaciklama']?></p>
								
								<a href="<?=$sonuc['seo']?>" class="read-more">
									İnceleyin
								</a>
							</div>
						</div>
					</div>
<?php } }?>
	
					<div class="col-12">
						<div class="pagination-area">
							 <?php
            $url=$_GET['page'];
            ?><?php for ($i = 1; $i <= $total_pages; $i++): ?>
							<a href="?page=<?= $i ?>" class="page-numbers <?php if($url==$i){?> current <?php }?>"><?= $i ?></a>
							<?php endfor; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	