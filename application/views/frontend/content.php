<body style="background-image: url('<?=base_url("assets/gambar/bg-luwu.png")?>');">
<div class="container">
	
	<div class="row mt-3">
		
		<div class="col-md-7 mb-2">
			
			<div class="row">
				<?php $no=1; foreach ($berita as $tampil) {
					$aku=$no++;
				$text=$tampil->isi;
				$string = word_limiter($text,10);
			 ?>
				<div class="col-md-12 mb-2">
			<div class="card <?php if($aku==1){ echo 'bg-info';} ?>" <?php if($aku==1){ echo 'style="color:white;"'; } ?>>
  
  <div class="card-body">
    <h5 class="card-title"><?=$tampil->judul?></h5>
    <p> <i class="far fa-calendar-alt"></i> <span> <?=date('d-m-Y H:i:s',strtotime($tampil->tgl_terbit))?></span> WIB</p>
    <div class="row">
    	<div class="col-md-3"><img src="<?php echo base_url('assets/gambar_berita/'.$tampil->foto.'') ?>" class="card-img-top" alt="..."></div>
    	<div class="col-md-7">
    <p class="card-text"><?=$string?></p>
    </div>

    </div>
    <a href="<?php echo base_url('home/detail_berita/'.$tampil->id.'') ?>" class="btn btn-primary btn-sm float-right">Baca Selengkapnya</a>
  </div>
</div>


</div>
<?php }?>
</div>
<!--row content-->

		</div>

	
		<!--col-->
<?php $this->load->view('frontend/sidebar'); ?>
	</div>
	<!--row-->
	
		

</div>
</body>