<!-- start banner Area -->
<section class="banner-area2 relative" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					<?php echo $header['page2'] ?>				
				</h1>	
				<p class="text-white link-nav">
					<a href="index.html">
						<?php echo $header['page1'] ?>
					</a> 
					<span class="lnr lnr-arrow-right"></span>  
					<a href="category.html">
						<?php echo $header['page2'] ?>
					</a>
					<?php if(isset($header['page3'])) { ?>
						<span class="lnr lnr-arrow-right"></span>  
						<a href="category.html">
							<?php echo $header['page3'] ?>
						</a>
					<?php } ?>
				</p>
			</div>											
		</div>
	</div>
</section>
<!-- End banner Area -->
