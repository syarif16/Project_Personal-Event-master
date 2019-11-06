<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>ClaVents</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/css/linearicons.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/css/nice-select.css">		
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/css/animate.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/css/modal.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/website/css/main.css">
        <!-- start style -->
        <style>
            

            
        </style>
        <!-- end style -->
    </head>
    <body>
        
    <div class="container mt-3">
        <h2>Modal Example</h2>
        <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-success">
            Open modal success
        </button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-duplikat">
            Open modal duplikat
        </button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-failed">
            Open modal failed
        </button>

        <!-- The Modal -->
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
                        <p>Anda berhasil Subscribe<p>
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
        <div class="modal modal-alert-duplikat-clavest animated-bounce-up-clavest fade" id="modal-duplikat">
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
                        <p>Email yang anda masukkan sudah Subscribe.<p>
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
                        <p>Email yang anda masukkan tidak valid.<p>
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
        
    </div>



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
        <script src="<?php echo base_url(); ?>assets/website/js/modal.js"></script>
        <script src="<?php echo base_url(); ?>assets/website/js/main.js"></script>
        
        
        <script>
            
        </script>
        

    </body>
</html>