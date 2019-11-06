<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<?php $this->load->view("_Partials/Header_V.php") ?>
	
	<style>
		#img-upload, #logo-image{
			width: 50%;
		}	
	</style>
	<!-- include summernote css/js -->
	<!-- <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/website/summernote/summernote-bs4.css';?>">
</head>
<body>
	<!-- NAVBAR  -->
	<?php $this->load->view("_Partials/Navbar_V.php") ?>
	<!-- BANNER   -->
	<?php $this->load->view("_Partials/Banner/Banner_All_V.php") ?>

	<!-- START Buat Event page -->
	<!-- start form insert -->
	<div class="container">
		<div class="row">
			<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col"><?= $event->id; ?></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Nama Event</th>
						<td><?= $event->nama_event; ?></td>
					</tr>
					<tr>
						<th scope="row">Poster</th>
						<td><img src="<?php echo base_url('uploads/poster/'.$event->poster_event); ?>" alt="" width="50%" height="50%"></td>
					</tr>
					<tr>
						<th scope="row">Kategori</th>
						<td>
							<?php foreach ($kategori_event as $value) {
								echo $value['katagori_event'];
								echo ' | ';
							} ?>
						</td>
					</tr>
					<tr>
						<th scope="row">Jenis</th>
						<td><?= $event->jenis_event; ?></td>
					</tr>
					<tr>
						<th scope="row">Kapasitas</th>
						<td><?= $event->kapasitas_event; ?></td>
					</tr>
					<tr>
						<th scope="row">Tanggal/Jam</th>
						<td>
							<?= $event->tanggal_mulai_event; ?>
							/<?= $event->jam_mulai_event; ?>
							-<?= $event->tanggal_akhir_event; ?>
							/<?= $event->jam_akhir_event; ?>
						</td>
					</tr>
					<tr>
						<th scope="row">Alamat</th>
						<td>
							<?= $event->nama_tempat_event; ?> -
							<?= $event->alamat_event; ?>,
							<?= $event->kota_kabupaten_event; ?>,
							<?= $event->provinsi_event; ?>
						</td>
					</tr>
					
					<tr>
						<th scope="row">Deskripsi</th>
						<td><?= $event->deskripsi_event; ?></td>
					</tr>
					<tr>
						<th scope="row">Syarat dan Ketentuan</th>
						<td><?= $event->syarat_dan_ketentuan_event; ?></td>
					</tr>
					<tr>
						<th scope="row">Info dan Kontak</th>
						<td><?= $event->info_dan_kontak_event; ?></td>
					</tr>
					<tr>
						<th scope="row">Organisasi</th>
						<td>
							<?= $organisasi->nama_organisasi; ?>
							 - 
							<img src="<?php echo base_url('uploads/logo/'.$organisasi->logo_organisasi); ?>" alt="" width="20%" height="20%">
							
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="row">
			<div class="float-right">
				<a href="<?= base_url($name_page) ?>" class="btn btn-primary">Done</a>
			</div>
		</div>
	</div>
	<br><br><br><br>
	<!-- end form insert -->
	<!-- END Buat Event page -->

	<!-- FOOTER  -->
	<?php $this->load->view("_Partials/Footer_V.php") ?>
	<!-- JAVASCRIPT  -->
	<?php $this->load->view("_Partials/JavaScript_V.php") ?>	
	
	<!-- include summernote  -->	
	<script type="text/javascript" src="<?php echo base_url().'assets/website/summernote/summernote-bs4.js';?>"></script>
    <script>
		$(document).ready(function(){
			$('#summernote').summernote({
				height: "300px",
				callbacks: {
			        onImageUpload: function(image) {
			            uploadImage(image[0]);
			        },
			        onMediaDelete : function(target) {
			            deleteImage(target[0].src);
			        }
				}
			});

			function uploadImage(image) {
			    var data = new FormData();
			    data.append("image", image);
			    $.ajax({
			        url: "<?php echo site_url('Buat_Event/Upload_Image')?>",
			        cache: false,
			        contentType: false,
			        processData: false,
			        data: data,
			        type: "POST",
			        success: function(url) {
						$('#summernote').summernote("insertImage", url);
			        },
			        error: function(data) {
			            console.log(data);
			        }
			    });
			}

			function deleteImage(src) {
			    $.ajax({
			        data: {src : src},
			        type: "POST",
			        url: "<?php echo site_url('Buat_Event/delete_image')?>",
			        cache: false,
			        success: function(response) {
			            console.log(response);
			        }
			    });
			}

		});
  	</script>

	
</body>
</html>
