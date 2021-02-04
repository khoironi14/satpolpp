<!DOCTYPE html>
<html>
<head>
	<title>	Info Loker Kerja</title>
</head>
<body>
<div class="container">
<div class="col-md-8">
<form action="<?php echo base_url('Admin/edit_info') ?>" method="post">	<input type="hidden" name="id" value="<?=$edit['id']?>">
<label>Judul loker</label>
<input type="text" name="judul" class="form-control" value="<?=$edit['judul_loker']?>" required="">
<label>Qualifikasi</label>
<textarea class="form-control" name="keterangan" value="<?=$edit['keterangan']?>"><?=$edit['keterangan']?></textarea>
<label>Berlaku S/d</label>
<input type="date" name="berlaku" class="form-control" value="<?=$edit['berlaku']?>">

<button type="submit" name="simpan" class="btn btn-info">Simpan</button>
<button class="btn btn-danger">Kembali</button>

</form>

</div>
	</div>
</body>
</html>
<script type="text/javascript" src="<?php echo base_url('assets/ckeditor/ckeditor.js') ?>"></script>
<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'keterangan' );
            </script>