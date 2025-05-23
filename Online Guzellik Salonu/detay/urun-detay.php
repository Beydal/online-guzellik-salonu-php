<section class="product-details-area ptb-100">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-12">
						<div class="product-details-image">
							<img src="resimler/<?=$urunler['resim']?>" alt="<?=$urunler['adi']?>">
						</div>
					</div>

					<div class="col-lg-6 col-md-12">
						<div class="product-details-desc">
							<h3><?=$urunler['adi']?></h3>

							<div class="product-review">
								<div class="rating">
									<i class="ri-star-fill"></i>
									<i class="ri-star-fill"></i>
									<i class="ri-star-fill"></i>
									<i class="ri-star-fill"></i>
									<i class="ri-star-fill"></i>
								</div>
								
							</div>

							<div class="price">
								<span class="new-price"> <del>$99.00</del> $80.00</span>
							</div>

							<p><?=$urunler['onaciklama']?></p>

							

						
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="tab product-details-tab">
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<ul class="tabs">
										<li>
											Açıklama
										</li>
										
										<li>
											Teklif Gönder
										</li>
									</ul>
								</div>

								<div class="col-lg-12 col-md-12">
									<div class="tab_content">
										<div class="tabs_item">
											<div class="product-details-tab-content">
												<h3 class="mb-2">Açıklama</h3>
												<p><?=$urunler['aciklama']?></p>
											</div>
										</div>

										

										<div class="tabs_item">
											<div class="product-details-tab-content">
												<div class="product-review-form">
													<h3>Teklif Gönder </h3>

													
													

													<div class="review-form">
														<h3>Write a Review</h3>

														<form>
															<div class="row">
																<div class="col-lg-6 col-md-6">
																	<div class="form-group">
																		<label>Name</label>
																		<input type="text" id="name" name="name" class="form-control">
																	</div>
																</div>

																<div class="col-lg-6 col-md-6">
																	<div class="form-group">
																		<label>Email</label>
																		<input type="email" id="email" name="email" class="form-control">
																	</div>
																</div>

																<div class="col-lg-12 col-md-12">
																	<div class="form-group">
																		<label>Review title</label>
																		<input type="text" id="review-title" name="review-title" class="form-control">
																	</div>
																</div>

																<div class="col-lg-12 col-md-12">
																	<div class="form-group">
																		<label>Body of review (1500)</label>
																		<textarea name="review-body" id="review-body" cols="30" rows="8" class="form-control"></textarea>
																	</div>
																</div>

																<div class="col-lg-12 col-md-12">
																	<button type="submit" class="btn default-btn">
																		Submit Review
																		<i class="ri-arrow-right-circle-line"></i>
																	</button>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>