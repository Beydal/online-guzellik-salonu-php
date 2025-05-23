<section class="appointment-area ptb-100">
			<div class="container">
				<div class="bg-color pb-100">
					<div class="row">
						<div class="appointment-action ptb-100">
							<h2>Randevu Al </h2>
	
							<form method="post" action="uadmin/kontroller/post.php">
								<div class="row">
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" id="First-Name" name="adsoyad" placeholder="Ad Soyad ">
                                            <input type="hidden" class="form-control" id="First-Name" name="link" value="../../randevu-al">
										</div>
									</div>
	
									
	
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<input type="email" class="form-control" id="Email" placeholder="Email " name="email">
										</div>
									</div>
	
									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="Phone" placeholder="Telefon" name="telefon">
										</div>
									</div>
                                    
                                    <div class="col-lg-6 col-md-6">
										<div class="form-group">
											<div class="input-group date" id="datetimepicker">
												<input type="text" class="form-control" id="Date" name="tarih" placeholder="mm/dd/yyyy">
												<span class="input-group-addon"></span>
												<i class="bx bx-calendar"></i>
											</div>	
										</div>
									</div>
									
										<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" id="Phone" placeholder="Saat" name="saat">
										</div>
									</div>
	
									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<select name="hizmet">
                                                         <?php
            $cek=$db->query("select * from hizmetler where durum='on' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
			foreach($cek as $goster){
			?>
												<option value="<?=$goster['adi']?>"><?=$goster['adi']?></option>	
												<?php }?>
											</select>
										</div>
									</div>
									
										<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<select name="uzman">
                                                         <?php
            $cek=$db->query("select * from ekibimiz where durum='on' order by sira asc")->fetchAll(PDO::FETCH_ASSOC);
			foreach($cek as $goster){
			?>
												<option value="<?=$goster['adi']?>"><?=$goster['adi']?></option>	
												<?php }?>
											</select>
										</div>
									</div>
	
									
	
									<div class="col-12">
										<div class="form-group">
											<textarea  class="form-control" id="Message" rows="6" name="mesaj" placeholder="Mesaj "></textarea>
										</div>
									</div>
	
									<div class="col-12">
										<button type="submit" class="default-btn" name="randevu-al">
											Randevu Al
											<i class="ri-file-text-line"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>

					<div class="shape shape-1">
						<img src="assets/images/appointment-shape-1.png" alt="Image">
					</div>
					<div class="shape shape-2">
						<img src="assets/images/appointment-shape-2.png" alt="Image">
					</div>
				</div>
			</div>
		</section>