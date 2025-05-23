	

		
		<section class="contact-info-area pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="single-contact-info">
							<h3>İletişim Bilgileri:</h3>

							<ul>
								<li>
									<span>Telefon:</span>
									<a href="tel:<?=$ayar['telefon1']?>"><?=$ayar['telefon1']?></a>
								</li>
								<li>
									<span>Email:</span>
									<a href="mailto:<?=$ayar['email1']?>"><?=$ayar['email1']?></a>
								</li>
								<li>
									<span>Adres:</span>
									<?=$ayar['adres1']?>
								</li>
							</ul>

						
						</div>
					</div>
                    
                    <div class="col-lg-6 col-md-6">
						<div class="single-contact-info">
							<h3>İletişim Bilgileri:</h3>

							<ul>
								<li>
									<span>Telefon:</span>
									<a href="tel:<?=$ayar['telefon2']?>"><?=$ayar['telefon2']?></a>
								</li>
								<li>
									<span>Email:</span>
									<a href="mailto:<?=$ayar['email2']?>"><?=$ayar['email2']?></a>
								</li>
								<li>
									<span>Adres:</span>
									<?=$ayar['adres2']?>
								</li>
							</ul>

						
						</div>
					</div>


					

					
				</div>
			</div>
		</section>
	
		<section class="main-contact-area pb-100">
			<div class="container">
				<div class="section-title">
					<h2>Bize Ulaşabilirsiniz</h2>
				</div>

				<form  method="post" action="uadmin/kontroller/post.php">
					<div class="row">
						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label>Ad Soyad </label>
                                <input type="hidden" name="link" id="name" class="form-control" value="../../iletisim">
								<input type="text" name="adsoyad" id="name" class="form-control" required="" data-error="Please enter your name">
								<div class="help-block with-errors"></div>
							</div>
						</div>

						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label> Email</label>
								<input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email">
								<div class="help-block with-errors"></div>
							</div>
						</div>

						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label>Telefon </label>
								<input type="text" name="telefon" id="phone_number" required="" data-error="Please enter your number" class="form-control">
								<div class="help-block with-errors"></div>
							</div>
						</div>

						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label>Konu</label>
								<input type="text" name="konu" id="msg_subject" class="form-control" required="" data-error="Please enter your subject">
								<div class="help-block with-errors"></div>
							</div>
						</div>

						<div class="col-12">
							<div class="form-group">
								<label>Mesaj </label>
								<textarea name="mesaj" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message"></textarea>
								<div class="help-block with-errors"></div>
							</div>
						</div>

						

						<div class="col-lg-12 col-md-12">
							<button type="submit" class="default-btn" name="iletisim-formu">
								<span>
									Gönder
									<i class="ri-arrow-right-circle-line"></i>
								</span>
							</button>
							<div id="msgSubmit" class="h3 text-center hidden"></div>
							<div class="clearfix"></div>
						</div>
					</div>
				</form>
			</div>
		</section>
		
		<div class="map-area pb-100">
			<?=$ayar['google_maps']?>
		</div>
	