<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
<div class="col-md-8">
	
	<form action="<?php echo base_url('Document/add_document') ?>" method="post" enctype="multipart/form-data">
		

		<label>Judul </label>
		<input type="text" name="judul" class="form-control">
		<label>Deskripsi</label>
		<textarea name="deskripsi" class="form-control"></textarea>
		<label>File</label>
		<input type="file" name="pdf" class="form-control">
		<button type="submit" name="simpan" class="btn btn-info">Simpan</button>
	</form>
</div>	

</div>
</body>
</html>