<!DOCTYPE html>
<html>
<head>
	<title>Form Kategori</title>
</head>
<body>
<div class="container">	
<div class="col-md-6">	
	<div class="card">
		<div class="card-header"><h4 class="card-title">Form Kategori Berita dan Kegiatan</h4></div>
		<div class="card-body">
<form action="<?php echo base_url('Admin/add_kategori') ?>" method="post">
<input type="hidden" name="id" value="<?=$edit['id']?>">
	<div class="form-group">

<label>Kategori</label>
<input type="text" name="kategori" class="form-control" value="<?=$edit['kategori']?>" required="">
</div>
<div class="form-group">
<button class="btn btn-info" name="simpan">Simpan</button> <a href="<?php echo base_url('Admin/kategori_berita') ?>" class="btn btn-danger">Kembali</a>
</div>



	</form>

</div>
</div>
	</div>
</div>
</body>
</html>