<!DOCTYPE html>
<html>
<head>
	<title>Informasi Pasar Kerja</title>
	<style type="text/css">
    

    .biodata{

   background-image:url(<?php echo base_url('assets/gambar/parallax.jpg') ?>);
   background-repeat:no-repeat;

}
  </style>
</head>
<body class="biodata">
<div class="container">
<div class="row">	
<div class="col-md-3">	
<p class=" align-middle" style="font-size:18px;">User id:<?php echo $this->session->userdata('username'); ?> </p></div>
<div class="col-md-3">
<a href="<?php echo base_url('Ipk/ubah_pass') ?>" class="btn btn-outline-info">Ubah Password</a></div>
	</div>

<div class="col-md-12" style="background-image:url(<?php echo base_url('assets/gambar/background.png') ?>">
<div class="jumbotron">
<h2>Selamat Datang <?php echo $this->session->userdata('username'); ?> diinformasi Pasar Kerja <br> Kabupaten Cilacap Jawa Tengah</h2>
</div>


	</div>


	</div>
</body>
</html>