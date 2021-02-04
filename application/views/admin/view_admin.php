<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="conatainer">
	<div class="col-md-8">
	<ol><a class="btn btn-success" href="<?php echo base_url('User/add_user') ?>">Tambah Admin</a></ol>
		
		<table class="table table-bordered">
			
		<thead>
			<tr>
				<th>No</th>
				<th>Username</th>
				<th>Foto</th>
				<th>Action</th>
			</tr>
		</thead>
<tbody>
<?php $no=1; foreach ($admin as $tampil) {
	
 ?>
	<tr>
		<td><?=$no++?></td>
		<td><?=$tampil->username?></td>
		<td></td>
		<td><a href='<?php echo base_url('User/edit_user/'.$tampil->id.'') ?>' class='btn btn-primary'>Edit</a><a href='<?php echo base_url('User/hapus_user/'.$tampil->id.'') ?>' class='btn btn-danger'>Hapus</a></td>

	</tr>
	<?php }?>
</tbody>
		</table>
	</div>
</div>
</body>
</html>