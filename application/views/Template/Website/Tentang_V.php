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

	<!-- START TENTANG page -->
	<!-- Start service Area -->
	<section class="service-area section-gap" id="service">
		<div class="container">
			
			<div class="row d-flex justify-content-center">
				<div class="col-md-8 pb-40 header-text">
					<h1><img src="<?php echo base_url(); ?>assets/website/img/logo/logobose2.png"/></h1>
					<div class="single-feature">
						<p>
							BOSEVENT adalah sebuah website yang bergerak dibidang layanan yang berkaitan dengan segala event yang ada, untuk membantu anda dalam mempromosikan event, mencari informasi event-event terbaru, terpopuler, membantu anda dalam pengelolaan penjualan tiket online dan menyediakan informasi EO(Event Organizer Professional) untuk anda yang kesusahan membuat event/ bingung mencari EO (Event Organizer). Website ini, juga menyediakan informasi mengenai perusahaan atau instansi-instansi yang siap untuk diajak bekerjasama sebagai sponsor dalam event anda dengan persayaratan atau ketentuan dari masing-masing perusahaan atau instansi, yang telah disediakan dalam website kami. (OCA)
						</p>
					</div>
				</div>
			</div>

		</div>	
	</section>
	<!-- End service Area -->
	<!-- END TENTANG page -->

	<!-- FOOTER  -->
	<?php $this->load->view("_Partials/Footer_V.php") ?>
	<!-- MODAL   -->
	<?php $this->load->view("_Partials/Modal_V.php") ?>
	<!-- JAVASCRIPT  -->
	<?php $this->load->view("_Partials/JavaScript_V.php") ?>

</body>
</html>
