	
		
		<header class="header-area header-area-style-three">
			<div class="top-header top-header-style-three">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-6">
							<div class="header-left-content">
								<div class="header-left-content">
								<ul class="contact-info">
									<li>
										<i class="ri-mail-line"></i>
										<a href="mailto:<?=$ayar['email1']?>">
											<?=$ayar['email1']?>
										</a>
									</li>
									<li>
										<i class="ri-customer-service-fill"></i>
										<a href="tel:<?=$ayar['telefon1']?>">
											<?=$ayar['telefon1']?>
										</a>
									</li>
								</ul>
							</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-6">
							<div class="header-right-content">
								

								<ul class="social-link">
									<li>
										<a href="<?=$ayar['linkedin']?>" target="_blank">
											<i class="ri-linkedin-fill"></i>
										</a>
									</li>
									<li>
										<a href="<?=$ayar['facebook']?>" target="_blank">
											<i class="ri-facebook-fill"></i>
										</a>
									</li>
									<li>
										<a href="<?=$ayar['twitter']?>" target="_blank">
											<i class="ri-twitter-fill"></i>
										</a>
									</li>
									<li>
										<a href="<?=$ayar['youtube']?>" target="_blank">
											<i class="ri-youtube-fill"></i>
										</a>
									</li>
									<li>
										<a href="<?=$ayar['instagram']?>" target="_blank">
											<i class="ri-instagram-fill"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="navbar-area navbar-area-style-three">
                <div class="mobile-responsive-nav">
                    <div class="container">
                        <div class="mobile-responsive-menu">
                            <div class="logo">
                                <a href="./">
									<img src="resimler/<?=$ayar['footer_logo']?>" alt="<?=$ayar['site_title']?>" width="200">
								</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="desktop-nav">
                    <div class="container">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="./">
                                <img src="resimler/<?=$ayar['logo']?>" alt="<?=$ayar['site_title']?>" width="200">
                            </a>

                            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                                <ul class="navbar-nav">

									<li class="nav-item">
										<a href="./" class="nav-link active">
											Anasayfa 
											
										</a>

                                      
									</li>

									<li class="nav-item">
	<a href="#" class="nav-link">
											Kurumsal 
											<i class="ri-arrow-down-s-line"></i>
										</a>

                                        <ul class="dropdown-menu">
                                                      <?php
            $cek=$db->query("select * from sayfalar where durum='on' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
			foreach($cek as $goster){
			?>
                                            <li class="nav-item">
												<a href="<?=$goster['seo']?>" class="nav-link"><?=$goster['adi']?></a>
											</li>
											<?php }?>
                                          
                                        </ul>
									</li>
									
									<li class="nav-item">
										<a href="urunler" class="nav-link">Ürünler</a>
									</li>
									
                                    
                                     
                                    <li class="nav-item">
										<a href="#" class="nav-link">
											Hizmetler 
											<i class="ri-arrow-down-s-line"></i>
										</a>

                                        <ul class="dropdown-menu">
                                                      <?php
            $cek=$db->query("select * from hizmetler where durum='on' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
			foreach($cek as $goster){
			?>
                                            <li class="nav-item">
												<a href="<?=$goster['seo']?>" class="nav-link"><?=$goster['adi']?></a>
											</li>
											<?php }?>
                                            <li class="nav-item">
												<a href="hizmetler" class="nav-link">Tüm Hizmetler </a>
											</li>
                                        </ul>
									</li>
                                    <li class="nav-item">
										<a href="ekibimiz" class="nav-link">Ekibimiz</a>
									</li>
                                    <li class="nav-item">
										<a href="galeri" class="nav-link">Galeri</a>
									</li>
									<li class="nav-item">
										<a href="blog" class="nav-link">Blog</a>
									</li>
									<li class="nav-item">
										<a href="sss" class="nav-link">S.S.S</a>
									</li>

                                    <li class="nav-item">
										<a href="iletisim" class="nav-link">İletişim</a>
									</li>
                                </ul>
                            </div>
                        </nav>
                    </div>
				</div>
				
				<div class="others-option-for-responsive">
					<div class="container">
						<div class="dot-menu">
							<div class="inner">
								<div class="circle circle-one"></div>
								<div class="circle circle-two"></div>
								<div class="circle circle-three"></div>
							</div>
						</div>
						
						<div class="container">
							<div class="option-inner">
								<div class="others-option justify-content-center d-flex align-items-center">
									<ul>
										<li>
											<a href="iletisim" class="default-btn">
												Randevu Al
												<i class="ri-file-text-line"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
		</header>
