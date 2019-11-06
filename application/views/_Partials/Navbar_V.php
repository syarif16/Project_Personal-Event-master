 <!-- start menu header area -->
 <header id="header" id="home">
	<div class="container">
		<div class="row align-items-center justify-content-between d-flex">
			<div id="logo">
				<a href="index.html"><img src="#" alt="" title="" /></a>
			</div>
			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li class="menu-active"><a href="<?php echo base_url(); ?>">Beranda</a></li>
					<!-- <li><a href="event.html">Event</a></li> -->
					<li class="menu-has-children"><a href="<?= site_url(); ?>Events">Events</a>
						<ul>
							<li><a href="<?= site_url(); ?>Events/Bazaar">Bazaar</a></li>
							<li><a href="<?= site_url(); ?>Events/Job_Fair">Job Fair</a></li>
							<li><a href="<?= site_url(); ?>Events/Lomba">Lomba</a></li>
							<li><a href="<?= site_url(); ?>Events/Pameran">Pameran</a></li>
							<li><a href="<?= site_url(); ?>Events/Seminar">Seminar</a></li>
						</ul>
					</li> 
					<li><a href="<?= site_url(); ?>About">Tentang</a></li>
					<li><a href="<?= site_url(); ?>Contact">Kontak</a></li>
					<li><a class="ticker-btn" href="<?= site_url(); ?>Buat_Event">Buat Event</a></li>				          				          
				</ul>
			</nav><!-- #nav-menu-container -->		    		
		</div>
	</div>
</header><!-- #header -->
<!-- end menu header area -->
