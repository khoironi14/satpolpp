<?php
date_default_timezone_set("Asia/Jakarta");
//echo date_default_timezone_get();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-9">
	<div class="card">
<div class="card-header"><h4 class="card-title">Form  Berita dan Kegiatan</h4></div>
		<div class="card-body">
<form action="<?php echo base_url('Admin/add_berita') ?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
	<label>Judul Berita</label>
	<input type="text" name="judul_berita" class="form-control" required=""></div>
	<div class="form-group">
	<label>isi Berita</label>
	<textarea id="ckeditor" name="ckeditor" class="	form-control" required=""></textarea></div>
	<div class="form-group">
	<label>Kategori Berita</label>
	<?php foreach ($kategori as $tampil) {
		
	 ?>
	<div class="form-check">
  <input class="form-check-input" name="kategori" type="checkbox" class="form-control" value="<?=$tampil->id?>">
  <label class="form-check-label" for="defaultCheck1">
    <?=$tampil->kategori?>
  </label>
</div>

<?php }?>
</div>
<div class="form-group">
	<label>Gambar</label>
	<input type="file" name="gambar" class="form-control" ><input type="hidden" name="tanggal" value="<?=date('Y-m-d H:i:s')?>"></div>
<div class="form-group">
<button type="submit" name="simpan" class="btn btn-info btn-sm ">Simpan</button> <a href="<?php echo base_url('Admin/view_berita') ?>" class="btn btn-danger btn-sm">Kembali</a>
</div>
</form>
	



</div>
</div></div>	
</div>	
</div>
</body>
</html>

<script type="text/javascript" src="<?php echo base_url('assets/ckeditor/ckeditor.js') ?>"></script>
<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'ckeditor' );
            </script>

