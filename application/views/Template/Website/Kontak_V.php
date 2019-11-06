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

	<!-- START KONTAK page -->
	<!-- Start contact-page Area -->
	<section class="contact-page-area section-gap">
		<div class="container">
			<div class="row">
				<div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
				<div class="col-lg-4 d-flex flex-column">
					<!-- <a class="contact-btns" href="#">Submit Your CV</a> -->
					<a class="contact-btns" href="<?= site_url(); ?>Buat_Event">BUat Event</a>
					<!-- <a class="contact-btns" href="#">Create New Account</a> -->
				</div>
				<div class="col-lg-8">
					<form  action="<?= site_url(); ?>Contact/Create" method="post" class="form-area contact-form text-right" >
						<div class="row">	
							<div class="col-lg-12 form-group">
								<input name="name" placeholder="Masukkan Nama Anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" type="text">
								<input name="email" placeholder="Masukkan Email Anda" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" type="email">
								<input name="subject" placeholder="Masukkan Subjek Anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" type="text">
								<textarea name="message" class="common-textarea mt-10 form-control"  placeholder="Pesan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" ></textarea>
								<button type="submit" class="primary-btn mt-20 text-white" style="float: right;">Kirim Pesan</button>
								<div class="mt-20 alert-msg" style="text-align: left;"></div>
							</div>
						</div>
					</form>	
				</div>
			</div>
		</div>	
	</section>
	<!-- End contact-page Area -->
	<!-- END KONTAK page -->

	<!-- FOOTER  -->
	<?php $this->load->view("_Partials/Footer_V.php") ?>
	<!-- MODAL   -->
	<?php $this->load->view("_Partials/Modal_V.php") ?>
	<!-- JAVASCRIPT  -->
	<?php $this->load->view("_Partials/JavaScript_V.php") ?>

</body>
</html>
