<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
<div class="col-md-6">
<form action="<?php echo base_url('Video/simpan') ?>" method="post" enctype="multipart/form-data">
<label>Judul Video</label>
<input type="text" name="judul" class="form-control" required="">
<label>Gambar</label>
<input type="file" name="foto" class="form-control" required="">
<label>Link Video</label>
<input type="text" name="link" class="form-control" required="">
<button class="btn btn-info" name="simpan">Simpan</button> <button class="btn btn-danger" name="simpan">Kembali</button>





	</form>	

</div>
</div>
</body>
</html>