<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-9">
	<div class="card"><div class="card-body">
<form action="<?php echo base_url('Admin/edit_berita') ?>" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?=$edit['id']?>">
<div class="form-group">
	<label>Judul Berita</label>
	<input type="text" name="judul_berita" value="<?=$edit['judul']?>" class="form-control" required=""></div>
	<div class="form-group">
	<label>isi Berita</label>
	<textarea id="ckeditor" name="ckeditor" class="	form-control" required=""><?=$edit['isi']?></textarea></div>
	<div class="form-group">
	<label>Kategori Berita</label>
	<?php foreach ($kategori as $tampil) {
		
	 ?>
	<div class="form-check">
  <input class="form-check-input" name="kategori" type="checkbox" class="form-control" value="<?=$tampil->id?>" <?php if ($tampil->id == $edit['id_kategori']) {
  	echo "checked";
  } ?>>
  <label class="form-check-label" for="defaultCheck1">
    <?=$tampil->kategori?>
  </label>
</div>
<?php }?>
</div>
<div class="form-group">
	<label>Gambar</label>
	<input type="file" name="gambar" class="form-control" >
	<img style="width:150px;" class="img-responsive" src="<?php echo base_url('assets/gambar_berita/'.$edit['foto'].'') ?>"><br></div>
<div class="form-group">
<button type="submit" name="simpan" class="btn btn-info">Simpan</button> <a href="<?php echo base_url('Admin/view_berita') ?>" class="btn btn-danger">Kembali</a>
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

