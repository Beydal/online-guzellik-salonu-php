<?php
if($ayar['whatsapp']!=''){
?>
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "<?=$ayar['whatsapp']?>", // WhatsApp numaranızı buraya girin
            call_to_action: "Merhaba, nasıl yardımcı olabilirim?", // Görünecek metin
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>




<?php }?>
	<footer class="footer-area">
			<div class="footer-bg pt-100 pb-70">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-footer-widget">
								<a href="./" class="logo">
									<img src="resimler/<?=$ayar['footer_logo']?>" alt="<?=$ayar['adi']?>">
								</a>
	
								<ul class="address">
									<li>
										<span>Telefon:</span>
										<a href="tel:<?=$ayar['telefon1']?>"><?=$ayar['telefon1']?></a>
										<a href="tel:<?=$ayar['telefon2']?>"><?=$ayar['telefon2']?></a>
									</li>
									<li>
										<span>Email:</span>
										<a href="mailto:<?=$ayar['email1']?>"><?=$ayar['email1']?></a>
										<a href="mailto:<?=$ayar['email2']?>"><?=$ayar['email2']?></a>
									</li>
									<li class="location">
										<span>Adres:</span>
										<?=$ayar['adres1']?>
									</li>
								</ul>
							</div>
						</div>
	
						
	
						<div class="col-lg-4 col-md-6">
							<div class="single-footer-widget">
								<h3>Hizmetler</h3>
	
								<ul class="import-link">
                                                                                                                             <?php
            $cek=$db->query("select * from hizmetler where durum='on' order by sira asc limit 3")->fetchAll(PDO::FETCH_ASSOC);
			foreach($cek as $goster){
			?>
									<li>
										<a href="<?=$goster['seo']?>"><?=$goster['adi']?></a>
									</li>
									<?php }?>
								</ul>
							</div>
						</div>
	
						<div class="col-lg-4 col-md-6">
							<div class="single-footer-widget">
								<h3>Hakkımızda</h3>
								<p style="text-align:justify"><?=$sayfa['onaciklama']?></p>
	
							
	
								<ul class="social-icon">
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

				<div class="shape shape-1">
					<img src="assets/images/footer-shape-1.png" alt="Image">
				</div>
				<div class="shape shape-2">
					<img src="assets/images/footer-shape-2.png" alt="Image">
				</div>
				<div class="shape shape-3">
					<img src="assets/images/footer-shape-3.png" alt="Image">
				</div>
				<div class="shape shape-4">
					<img src="assets/images/footer-shape-4.png" alt="Image">
				</div>
				<div class="shape shape-5">
					<img src="assets/images/footer-shape-5.png" alt="Image">
				</div>
			</div>
		</footer>

		<div class="copy-right-area">
			<div class="copy-right-bg">
				<div class="container">
					<div class="copy-right-border">
						<p>
							<?=$ayar['footer_copyright']?>
						</p>
					</div>
				</div>
			</div>
		</div>

