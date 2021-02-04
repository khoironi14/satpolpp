<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	
	<div class="row">
		
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
				<h5 class="card-title">Form Gallery</h5>
				</div>
				<div class="card-body">
			
			<form action="<?php echo base_url('Gallery/edit_gallery') ?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?=$edit['id']?>" >
				<div class="form-group">
			<label>Judul</label>
			<input type="text" name="judul" class="form-control" value="<?=$edit['judul']?>" required=""></div>
			<div class="form-group">
			<label>Keterangan</label>
			<input type="text" name="keterangan" class="form-control" value="<?=$edit['keterangan']?>"  required=""></div>
			<div class="form-group">
			<label>Foto</label>
			<input type="file" name="foto" class="form-control"></div>
<div class="form-group">
			<button type="submit" class="btn btn-success" name="simpan">Simpan</button> <a href="<?php echo base_url('Gallery/index') ?>" class="btn btn-danger">Kembali</a>
		</div>
			</form>
		</div>

		</div></div>
	</div>
</div>
</body>
</html>