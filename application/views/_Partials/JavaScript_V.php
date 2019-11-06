<script src="<?php echo base_url(); ?>assets/website/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>assets/website/js/vendor/bootstrap.min.js"></script>			
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="<?php echo base_url(); ?>assets/website/js/easing.min.js"></script>			
<script src="<?php echo base_url(); ?>assets/website/js/hoverIntent.js"></script>
<script src="<?php echo base_url(); ?>assets/website/js/superfish.min.js"></script>	
<script src="<?php echo base_url(); ?>assets/website/js/jquery.ajaxchimp.min.js"></script>
<script src="<?php echo base_url(); ?>assets/website/js/jquery.magnific-popup.min.js"></script>	
<script src="<?php echo base_url(); ?>assets/website/js/owl.carousel.min.js"></script>			
<script src="<?php echo base_url(); ?>assets/website/js/jquery.sticky.js"></script>
<script src="<?php echo base_url(); ?>assets/website/js/jquery.nice-select.min.js"></script>			
<script src="<?php echo base_url(); ?>assets/website/js/parallax.min.js"></script>		
<script src="<?php echo base_url(); ?>assets/website/js/mail-script.js"></script>	
<!-- MODAL JS  -->
<script src="<?php echo base_url(); ?>assets/website/js/modal.js"></script>
<!-- MAIN JS  -->
<script src="<?php echo base_url(); ?>assets/website/js/main.js"></script>	
<!-- MULTI SELECT  -->
<script src="<?php echo base_url(); ?>assets/website/js/multi-select.js"></script>
<!-- DATE-PICKER -->
<script src="<?php echo base_url(); ?>assets/website/vendor/date-picker/js/datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/website/vendor/date-picker/js/datepicker.en.js"></script>

<script>
	var session = "<?php echo $_SESSION['Modal-Alert'] ?>";
	if(session == 'Failed') {
		$('#modal-failed').modal('show');
	}
	else if(session == 'Duplicate')
	{
		$('#modal-duplicate').modal('show');
	}
	else if(session == 'Success')
	{
		$('#modal-success').modal('show');
	}

	
</script>

<script>
	// Add the following code if you want the name of the file appear on select
	$(".custom-file-input").on("change", function() {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
	});

	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			
			reader.onload = function (e) {
				$('#img-upload').attr('src', e.target.result);
			}
			
			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#image_input").change(function(){
		readURL(this);
	}); 	
</script>

