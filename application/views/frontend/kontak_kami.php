<body style="background-image: url('<?=base_url("assets/gambar/bg-luwu.png")?>');">
<div class="container">
	
	<div class="row mt-2">
		
		<div class="col-md-7">
			<div class="card" style="height:65rem;"> 
<div class="card-header bg-info"><h5 class="card-title text-white">Hubungi Kami</h5><hr></div>
				<div class="card-body">
				<?php echo $this->session->userdata('pesan'); ?>
				
			<form action="" method="post">
				<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control" required="">
				</div>

								<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" required="">
				</div>
								<div class="form-group">
				<label>Alamat</label>
				<input type="text" name="alamat" class="form-control" required="">
				</div>
								<div class="form-group">
				<label>Judul</label>
				<input type="text" name="judul" class="form-control" required="">
				</div>
								<div class="form-group">
				<label>Isi Pesan</label>
			<textarea name="pesan" class="form-control" rows="15"></textarea>
				</div>
								<div class="form-group">
				<button class="btn btn-primary " name="simpan">Simpan</button>
				</div>
			</form>
		</div>
		</div></div>

		<?php $this->load->view('frontend/sidebar'); ?>
	</div>
</div>
</body>