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

	<!-- START BAZAAR page -->
	<!-- Start post Area -->
	<section class="post-area section-gap">
		<div class="container">
			<div class="row justify-content-center d-flex">
				<div class="col-lg-8 post-list">
					<?php foreach ($event as $value) { ?>
					<div class="single-post d-flex flex-row">
						<div class="thumb">
							<img src="<?php echo base_url('uploads/poster/'.$value['poster_event']); ?>" alt="" style="width:100%; height:100%; padding-right : 30px;">
						</div>
						<div class="details">
							<div class="title d-flex flex-row justify-content-between">
								<div class="titles">
									<a href="single.html"><h4><?= $value['nama_event']; ?></h4></a>
									<h6>
										<?php foreach ($kategori_event as $value1) {
											if($value1['kategori_event_id'] == $value['kategori_event']) {
												echo $value1['katagori_event'];
												echo ' | ';
											}
										} ?>
									</h6>					
								</div>
								<ul class="btns">
									<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
									<li><a href="">Rincian</a></li>
								</ul>
							</div>
							<p></p>
							<!-- <hr> -->
							<p class="address"><span class="lnr lnr-calendar-full"></span> <?= $value['tanggal_mulai_event'] ?></p>
							<p class="address"><span class="lnr lnr-clock"></span> <?= $value['jam_mulai_event'] ?></p>
							<p class="address"><span class="lnr lnr-map-marker"></span> <?= $value['kota_kabupaten_event'] ?></p>
							<p class="address"><span class="lnr lnr-database"></span> <?= $value['kota_kabupaten_event'] ?> anggap ini organisasi</p>

						</div>
					</div>
					<?php } ?>
					

				</div>
				
				<div class="col-lg-4 sidebar">
					
					<div class="single-slidebar">
						<h4>Lokasi Events</h4>
						<ul class="cat-list">
							<li><a class="justify-content-between d-flex" href="category.html"><p>Jakarta</p><span>10</span></a></li>
							<li><a class="justify-content-between d-flex" href="category.html"><p>Bandung</p><span>10</span></a></li>
							<!-- <li><a class="justify-content-between d-flex" href="category.html"><p>Atlanta</p><span>33</span></a></li>
							<li><a class="justify-content-between d-flex" href="category.html"><p>Arizona</p><span>36</span></a></li>
							<li><a class="justify-content-between d-flex" href="category.html"><p>Florida</p><span>47</span></a></li>
							<li><a class="justify-content-between d-flex" href="category.html"><p>Rocky Beach</p><span>27</span></a></li>
							<li><a class="justify-content-between d-flex" href="category.html"><p>Chicago</p><span>17</span></a></li> -->
						</ul>
					</div>

					<div class="single-slidebar">
						<h4>Kategori Events</h4>
						<ul class="cat-list">
							<li><a class="justify-content-between d-flex" href="category.html"><p>Bazaar</p><span>5</span></a></li>
							<li><a class="justify-content-between d-flex" href="category.html"><p>Job Fair</p><span>5</span></a></li>
							<li><a class="justify-content-between d-flex" href="category.html"><p>Lomba</p><span>5</span></a></li>
							<li><a class="justify-content-between d-flex" href="category.html"><p>Pameran</p><span>5</span></a></li>
							<li><a class="justify-content-between d-flex" href="category.html"><p>Seminar</p><span>5</span></a></li>
							<!-- <li><a class="justify-content-between d-flex" href="category.html"><p>Developer</p><span>27</span></a></li>
							<li><a class="justify-content-between d-flex" href="category.html"><p>Accounting</p><span>17</span></a></li> -->
						</ul>
					</div>

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
	<!-- Start callto-action Area -->
	<section class="callto-action-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 download-left">
					<img class="img-fluid" src="img/header-bg.jpg" alt="">
				</div>
				<div class="col-lg-6 download-right">
					<br><br><br>
					<h1>Buat Event</h1>
					<p class="text-white">
							Buatlah Eventmu sendiri dan posting Event mu di ClaVent.com. <br>
							Jadikan event anda diketahui banyak orang.
					</p>
					<div class="d-flex flex-row">
						<div class="buttons">
							<i class="fa fa-pencil" aria-hidden="true"></i>
							<div class="desc">
								<a href="#">
									<p>
										<span>Buat</span> <br>
										Event
									</p>
								</a>
							</div>
						</div>									
					</div>						
				</div>
			</div>
		</div>	
	</section>
	<!-- End calto-action Area -->
	<!-- END BAZAAR page -->

	<!-- FOOTER  -->
	<?php $this->load->view("_Partials/Footer_V.php") ?>
	<!-- MODAL   -->
	<?php $this->load->view("_Partials/Modal_V.php") ?>
	<!-- JAVASCRIPT  -->
	<?php $this->load->view("_Partials/JavaScript_V.php") ?>

</body>
</html>
