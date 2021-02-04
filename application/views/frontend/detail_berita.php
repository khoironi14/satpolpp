<body style="background-image: url('<?=base_url("assets/gambar/bg-luwu.png")?>');">
<div class="container">
	
	<div class="row mt-2">


<div class="col-md-7">
	<div class="card">
		<div class="card-body">
			<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item" ><a href="<?php echo base_url('home/index') ?>" style="color:blue;">Beranda</a></li>
    <li class="breadcrumb-item active" aria-current="page">Berita</li>
  </ol>
</nav>
<h3><?=$detail['judul']?></h3><hr>
<p> <i class="far fa-calendar-alt"></i> <span> <?=date('d-m-Y H:i:s',strtotime($detail['tgl_terbit']))?></span> WIB</p>
<img src="<?php echo base_url('assets/gambar_berita/'.$detail["foto"].'') ?>" class="card-img-top">
<p><?=$detail['isi']?></p>





</div>
</div>
</div>
<?php $this->load->view('frontend/sidebar'); ?>
</div>
</div>
</body>