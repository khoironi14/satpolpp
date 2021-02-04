<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
<form action="" method="post">
<label><h4>Profil Kemenaker</h4></label>	
<textarea name="ckeditor" class="form-control"></textarea>
<label><h4>Faq</h4></label>
<textarea name="faq"></textarea>

<button class="btn btn-info">Simpan</button>
</form>

	</div>
</body>
</html>
<script type="text/javascript" src="<?php echo base_url('assets/ckeditor/ckeditor.js') ?>"></script>
<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'ckeditor' );
            </script>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'faq' );
            </script>