<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<?php $this->load->view("_Partials/Header_V.php") ?>
	
</head>
<body>

	<!-- NAVBAR  -->
	<?php $this->load->view("_Partials/Navbar_V.php") ?>
	<!-- BANNER   -->
	<?php $this->load->view("_Partials/Banner/Banner_All_V.php") ?>

	<!-- Start post Area -->
	<section class="post-area section-gap">
		<div class="container">
			<div class="row justify-content-center d-flex">
				<div class="col-lg-8 post-list">
					
					<div class="single-post d-flex flex-row">
						<img class="img-fluid" src="<?php echo base_url('uploads/poster/'.$event->poster_event); ?>" alt="">
					</div>

					<div class="single-post d-flex flex-row">
						<div class="details">
							<div class="title d-flex flex-row justify-content-between">
								<div class="titles">
									<a href="#"><h4><?= $event->nama_event; ?></h4></a>
									<h6>
										<?php foreach ($kategori_event as $value) {
											echo $value['katagori_event'];
											echo ' | ';
										} ?>
									</h6>					
								</div>
							</div>
							
						</div>
					</div>

					<div class="single-post job-details">
						<h4 class="single-title">Tempat, Tanggal, Waktu</h4>
						<p class="address"><span class="lnr lnr-calendar-full"></span> <?= $event->tanggal_mulai_event; ?></p>
						<p class="address"><span class="lnr lnr-clock"></span> <?= $event->jam_mulai_event; ?></p>
						<p class="address">
							<span class="lnr lnr-map-marker"></span> 
							<?= $event->nama_tempat_event; ?> -
							<?= $event->alamat_event; ?>,
							<?= $event->kota_kabupaten_event; ?>,
							<?= $event->provinsi_event; ?>
						</p>
						
					</div>

					<div class="single-post d-flex flex-row ">
						<div class="details">
							<h4 class="single-title">Diselenggarakan oleh :</h4>
							<div class="row">
								<div class="col-lg-4 ">
									<img src="<?php echo base_url('uploads/logo/'.$organisasi->logo_organisasi); ?>" alt="" style="padding-right : 30px; width:100%; height:100%;">
								</div>
								<div class="col-lg-8">
									<p>
										<?= $organisasi->nama_organisasi; ?>
									</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="single-post job-details">
						<h4 class="single-title">Deskripsi Events</h4>
						<p>
							<?= $event->deskripsi_event; ?>
						</p>
						<h4 class="single-title">Syarat dan Ketentuan</h4>
						<p>
							<?= $event->syarat_dan_ketentuan_event; ?>
						</p>
						<h4 class="single-title">Info dan Kontak</h4>
						<p>
							<?= $event->info_dan_kontak_event; ?>
						</p>
					</div>
																			
				</div>
				<div class="col-lg-4 sidebar">
					
					<div class="single-slidebar">
						<h4>Populer Events</h4>
						<div class="active-relatedjob-carusel">
							<div class="single-rated">
								<img class="img-fluid" src="img/r1.jpg" alt="">
								<a href="single.html"><h4>Nama Events</h4></a>
								<h6>Kategori Events</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
								</p>
								<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
								<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
								<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
								<a href="#" class="btns text-uppercase">Rincian</a>
							</div>
							<div class="single-rated">
								<img class="img-fluid" src="img/r1.jpg" alt="">
								<a href="single.html"><h4>Nama Events</h4></a>
								<h6>Kategori Events</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
								</p>
								<h5>Job Nature: Full time</h5>
								<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
								<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
								<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
								<a href="#" class="btns text-uppercase">Rincian</a>
							</div>
							<div class="single-rated">
								<img class="img-fluid" src="img/r1.jpg" alt="">
								<a href="single.html"><h4>Nama Events</h4></a>
								<h6>Kategori Events</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
								</p>
								<h5>Job Nature: Full time</h5>
								<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
								<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
								<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
								<a href="#" class="btns text-uppercase">Rincian</a>
							</div>																		
						</div>
					</div>							

					

					<div class="single-slidebar">
						<h4>Event Baru</h4>
						<div class="blog-list">
							<div class="single-blog " style="background:#000 url(img/blog1.jpg);">
								<a href="single.html"><h4>Home Audio Recording <br>
								For Everyone</h4></a>
								<div class="meta justify-content-between d-flex">
									<p>
										02 Hours ago
									</p>
									<p>
										<span class="lnr lnr-heart"></span>
										06
											<span class="lnr lnr-bubble"></span>
										02
									</p>
								</div>
							</div>
							<div class="single-blog " style="background:#000 url(img/blog2.jpg);">
								<a href="single.html"><h4>Home Audio Recording <br>
								For Everyone</h4></a>
								<div class="meta justify-content-between d-flex">
									<p>
										02 Hours ago
									</p>
									<p>
										<span class="lnr lnr-heart"></span>
										06
											<span class="lnr lnr-bubble"></span>
										02
									</p>
								</div>
							</div>
							<div class="single-blog " style="background:#000 url(img/blog1.jpg);">
								<a href="single.html"><h4>Home Audio Recording <br>
								For Everyone</h4></a>
								<div class="meta justify-content-between d-flex">
									<p>
										02 Hours ago
									</p>
									<p>
										<span class="lnr lnr-heart"></span>
										06
											<span class="lnr lnr-bubble"></span>
										02
									</p>
								</div>
							</div>																		
						</div>
					</div>							

				</div>
			</div>
		</div>	
	</section>
	<!-- End post Area -->

	<!-- FOOTER  -->
	<?php $this->load->view("_Partials/Footer_V.php") ?>
	<!-- MODAL   -->
	<?php $this->load->view("_Partials/Modal_V.php") ?>
	<!-- JAVASCRIPT  -->
	<?php $this->load->view("_Partials/JavaScript_V.php") ?>

</body>
</html>
