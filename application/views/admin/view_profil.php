<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-6">
	<a href="<?php echo base_url('Profil/add_profil') ?>" class="btn btn-info">Tambah Profil</a>
		<table class="table table-konseded">
			<thead>
				<tr>
					<th>Profil</th>
					<th>Action</th>
				</tr>
			</thead>
<tbody>
<?php foreach ($profil as $tampil) {
	
 ?>
<tr>
	<td><?=$tampil->profil?></td>
	<td><a href='<?php echo base_url('Profil/edit_profil/'.$tampil->id.'') ?>' class='btn btn-info'>Edit</a></td>
	</tr>
	<?php }?>
</tbody>

		</table>
	</div>
</div>
</body>
</html>