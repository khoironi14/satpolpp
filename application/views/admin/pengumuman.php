<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
<div class="col-md-6">
	<form action="<?php echo base_url('Admin/pengumuman') ?>" method="post" enctype="multipart/form-data">
		
	<label>Foto</label>
	<input type="file" name="foto" class="form-control" required="">
	<label>Link</label>
	<input type="text" name="link" class="form-control" required="">
	<button class="btn btn-info" name="simpan">Simpan</button>
	</form>
</div>
</div>

</body>
</html>