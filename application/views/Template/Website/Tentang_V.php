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
					<h1>Tentang Kami</h1>
					<div class="single-feature">
						<p>
							CLAVEST adalah suatu platform berbentuk website yang bertujuan untuk memberikan informasi mengenai seluruh penyelenggaraan event yang ada di Indonesia. Kami memberikan informasi mengenai event mulai dari deskripsi, tanggal, jam dan alamat event tersebut.
						</p>
						<br>
						<p>
							Selain itu kami memberikan fitur bagi anda yang ingin membuat posting event di website kami secara gratis tanpa melakukan registrasi. Jadi tanpa adanya registrasi anda bisa langsung membuat event.
						</p>
						<br>
						<p>
							Dan juga kalian bisa subscribe website kami dengan memasukkan email anda, agar mendapatkan informasi terbaru dari kami.
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
