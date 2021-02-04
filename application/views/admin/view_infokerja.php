<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css')?>" rel="stylesheet">
</head>
<body>
<div class="container">
<div class="col-md-12">
  <ol class="breadcrumb"><a href='<?php echo base_url('Admin/info_loker') ?>' class="btn btn-outline-primary">Tambah Data</a></ol>
<table class="table table-bordered" id="info">
<thead>
<tr>
<th>No</th>	
<th>Judul</th>	
<th>Tanggal Berlaku</th>
<th>Qualifikasi</th>

<th>Action</th>

</tr>	

</thead>	
<tbody>
<?php $no=1; foreach ($kerja as $tampil) {
	
 ?>
	<tr>
		<td><?=$no++?></td>
		<td><?=$tampil->judul_loker?></td>
		<td><?=$tampil->berlaku?></td>
		<td><?=$tampil->keterangan?></td>
		
		<td width="25%"><a href='<?php echo base_url('Admin/edit_info/'.$tampil->id.'') ?>' class='btn btn-info'>Edit</a> <a href='<?php echo base_url('Admin/hapus_loker/'.$tampil->id.'') ?>' class='btn btn-danger'>Hapus</a></td>
	</tr>
	<?php }?>
</tbody>


</table>	




</div>	


</div>
</body>
</html>
<script type="text/javascript" src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js') ?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
	var table ;

    table = $('#info').dataTable({
                rowsGroup: [
                    2    
                ],
                bProcessing: true,
                sAjaxSource: $('#info').data('url')
            }); 
            });    
</script>