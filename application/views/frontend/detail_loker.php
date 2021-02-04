<!DOCTYPE html>
<html>
<head>
	<title>Informasi Pasar Kerja	</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
<div class="container">
<div class="row">	
<div class="col-sm-12 mt-3">
  <a href="<?php echo base_url('Welcome/cetak_lowongan/'.$detail['id'].'') ?>	" class="btn btn-info">Cetak Lowongan Kerja</a>
<ul class="list-group mt-2">
  <li class="list-group-item active"><i class="fas fa-info-circle fa-2x"></i>Profil Perusahaan</li>
  <li class="list-group-item">Perusahaan <?=$detail['nama_perusahaan']?></li>
  <li class="list-group-item">Alamat:<?=$detail['alamat']?></li>
  <li class="list-group-item">Telpon Perusahaan <?=$detail['tlp_perusahaan']?></li>
  <li class="list-group-item">Sektor Usaha <?=$detail['sektor_usaha']?></li>
</ul>
  	</div>

  	<div class="col-md-12">
<ul class="list-group mt-2">
  <li class="list-group-item active"><i class="fas fa-child fa-2x"></i>Job Description</li>
  <li class="list-group-item">Lowongan <?=$detail['judul_loker']?></li>
  <li class="list-group-item">Negara Tujuan Lowongan:<?=$detail['negara_tujuan']?></li>
  <li class="list-group-item">Deskripsi Pekerjaan <?=$detail['deskripsi_pekerjaan']?></li>
  <li class="list-group-item">Kebutuhan Tenaga <?=$detail['Kebutuhan']?></li>
</ul>
  		</div>
  		<div class="col-md-6"><ul class="list-group mt-2">
  <li class="list-group-item active"><i class="far fa-calendar-minus fa-2x"></i>Persyaratan Umum</li>
  <li class="list-group-item"> <?=$detail['persyaratan_umum']?></li>
 
</ul>	</div>
<div class="col-md-6"><ul class="list-group mt-2">
  <li class="list-group-item active"><i class="far fa-plus-square fa-2x"></i>Persyaratan Khusus</li>
  <li class="list-group-item"><?=$detail['persyaratan_khusus']?></li>
 
</ul>	</div>
<div class="col-md-12"><ul class="list-group mt-2">
  <li class="list-group-item active"><i class="far fa-file fa-2x"></i>Kelengkapan Berkas Lamaran</li>
  <li class="list-group-item"><?=$detail['persyaratan_khusus']?></li>
 
</ul>	</div>


</div>
<center><a href="<?php echo base_url('Welcome/lamar_kerja') ?>" class="btn btn-info mt-2">Lamar Kerja</a></center>
<div>	</div>
	</div>
</body>
</html>
<script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>