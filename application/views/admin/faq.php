<!DOCTYPE html>
<html>
<head>
	<title>Faq</title>
</head>
<body>
<div class="container">
	<div class="col-md-12">
		<form action="<?php echo base_url('Profil/faq') ?>" method="post">
		<input type="hidden" name="id" value="<?=$faq['id']?>">
			<h4 class="alert alert-info">Faq</h4>
			<textarea name="ckeditor" class="form-control" value="<?=$faq['faq']?>"><?=$faq['faq']?></textarea>
			<button class="	btn btn-info mt-1" name="simpan">Simpan</button>
		</form>
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