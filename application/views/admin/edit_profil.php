<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
<div class="col-md-10">
<form action="<?php echo base_url('Profil/edit_profil') ?>" method="post">
<input type="hidden" name="id" value="<?=$edit['id']?>">
<label>Judul Profil</label>
<input type="text" name="judul_profil" value="<?=$edit['judul_profil']?>" class="form-control">	
<label>Profil</label>
<textarea name="profil" class="form-control" value="<?=$edit['profil']?>"><?=$edit['profil']?></textarea>
<button class="btn btn-info" type="submit" name="simpan">Simpan</button>

</form>	




</div>	



</div>
</body>
</html>
<script type="text/javascript" src="<?php echo base_url('assets/ckeditor/ckeditor.js') ?>"></script>
<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'profil' );
            </script>