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
		<div class="row">
	 <?php foreach ($berita as $tampil) {
		$text=$tampil->isi;
				$string = word_limiter($text,10);?>
		
<div class="col-md-12"><hr style="border-top: 1px solid green;">
<div class="card-body">
    <h5 class="card-title"><?=$tampil->judul?></h5>
    <p> <i class="far fa-calendar-alt"></i> <span> <?=date('d-m-Y H:i:s',strtotime($tampil->tgl_terbit))?></span> WIB</p>
    <div class="row">
    	<div class="col-md-3"><img src="<?php echo base_url('assets/gambar_berita/'.$tampil->foto.'') ?>" class="card-img-top" alt="..."></div>
    	<div class="col-md-7">
    <p class="card-text"><?=$string?></p>
    </div>

    </div>
    <a href="<?php echo base_url('home/detail_berita/'.$tampil->id.'') ?>" class="btn btn-primary float-right">Baca Selengkapnya</a>
  </div>

</div>
<?php }?>
</div>
		</div>

<!--row-->

	</div>


		</div>
<?php $this->load->view('frontend/sidebar'); ?>
		
		
</div>		
</div>
</body>
