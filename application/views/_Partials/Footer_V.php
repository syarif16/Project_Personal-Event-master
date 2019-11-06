<!-- start footer Area -->		
<footer class="footer-area section-gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-3  col-md-12">
				<div class="single-footer-widget">
					<h6>Menu ClaVents</h6>
					<ul class="footer-nav">
						<li><a href="#">Events</a></li>
						<li><a href="#">Tentang</a></li>
						<li><a href="#">Kontak</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6  col-md-12">
				<div class="single-footer-widget newsletter">
					<h6>Subscribe Sekarang</h6>
					<p>Subscribe sekarang juga dan dapatkan info terbaru dari kami.</p>
					<form action="<?= site_url(); ?>Subscribe/index/<?= $name_page; ?>" method="post" class="form-inline">
						<div class="form-group row" style="width: 100%">
							<div class="col-lg-8 col-md-12">
								<input name="email" placeholder="Masukkan Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Email '" required="" type="email">
								<div style="position: absolute; left: -5000px;">
									<input name="menu" tabindex="-1" value="1" type="text">
								</div>
							</div> 
						
							<div class="col-lg-4 col-md-12">
								<button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
							</div> 
						</div>		
						<div class="info"></div>
					</form>	
				</div>
			</div>
			<div class="col-lg-3  col-md-12">
				<div class="single-footer-widget mail-chimp">
					<h6 class="mb-20">ClaVents</h6>
					<p>description</p>
					<p>alamat</p>
					<p>kontak</p>
				</div>
			</div>						
		</div>

		<div class="row footer-bottom d-flex justify-content-between">
			<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script><a href="http://bramango.com" target="_blank"> ClaVents</a>. Semua Hak Cipta Dilindungi.
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</p>
			<div class="col-lg-4 col-sm-12 footer-social">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-behance"></i></a>
			</div>
		</div>
	</div>
</footer>
<!-- End footer Area -->
