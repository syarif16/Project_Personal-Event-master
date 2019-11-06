<!-- start modal -->
<!-- modal success -->
<div class="modal modal-alert-success-clavest animated-swing-clavest fade" id="modal-success">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class=" modal-close-area modal-close-df">
				<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
			</div>
			<!-- Modal body -->
			<div class="modal-body">
				<i class="fa fa-check modal-check-clavest"></i>
				<h2>Sukses!</h2>
				<p><?= $_SESSION['Modal-Content'] ?><p>
			</div>
			<!-- Modal footer -->
			<div class="modal-footer" >
				<div class="col text-center">
					<a data-dismiss="modal" href="#">Done</a>
					<!-- <a href="#">Process</a> -->
				</div>
			</div>
			
		</div>
	</div>
</div>

<!-- modal duplikat -->
<div class="modal modal-alert-duplikat-clavest animated-bounce-up-clavest fade" id="modal-duplicate">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class=" modal-close-area modal-close-df">
				<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
			</div>
			<!-- Modal body -->
			<div class="modal-body">
				<!-- <span class="adminpro-icon adminpro-warning-danger modal-check-pro information-icon-pro"></span> -->
				<i class="fa fa-exclamation modal-check-clavest"></i>
				<h2>Perhatian!</h2>
				<p><?= $_SESSION['Modal-Content'] ?><p>
			</div>
			<!-- Modal footer -->
			<div class="modal-footer" >
				<div class="col text-center">
					<a data-dismiss="modal" href="#">Close</a>
					<!-- <a href="#">Process</a> -->
				</div>
			</div>
			
		</div>
	</div>
</div>

<!-- modal failed -->
<div class="modal modal-alert-failed-clavest animated-shake-clavest fade" id="modal-failed">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class=" modal-close-area modal-close-df">
				<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
			</div>
			<!-- Modal body -->
			<div class="modal-body">
				<!-- <span class="adminpro-icon adminpro-warning-danger modal-check-pro information-icon-pro"></span> -->
				<i class="fa fa-times modal-check-clavest"></i>
				<h2>Gagal!</h2>
				<p><?= $_SESSION['Modal-Content'] ?><p>
			</div>
			<!-- Modal footer -->
			<div class="modal-footer" >
				<div class="col text-center">
					<a data-dismiss="modal" href="#">Close</a>
					<!-- <a href="#">Process</a> -->
				</div>
			</div>
			
		</div>
	</div>
</div>

<!-- end modal -->
