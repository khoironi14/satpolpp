<body style="background-image: url('<?=base_url("assets/gambar/bg-luwu.png")?>');">
<div class="container">
	
	<div class="row">
		
		<div class="col-md-7 mt-2">
			<div class="card" style="height:65rem;">
				<div class="card-body">
			<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item" ><a href="<?php echo base_url('home/index') ?>" style="color:blue;">Beranda</a></li>
    <li class="breadcrumb-item active" aria-current="page">Misi</li>
  </ol>
</nav>

<p><?=$visi['misi']?></p>
		</div>
	</div>
	</div>

	<?php $this->load->view('frontend/sidebar'); ?>
	</div>
</div>
</body>