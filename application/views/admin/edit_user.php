<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
<div class="container">
<div class="col-md-8">
<form action="<?php echo base_url('User/edit_user') ?>" method="post">
<input type="hidden" name="id" value="<?=$edit['id']?>">
<label>	USername</label>
<input type="text" name="username" value="<?=$edit['username']?>" class="form-control">


<button name="simpan" class="btn btn-info">Simpan</button>
	</form>

	</div>


	</div>
</body>
</html>