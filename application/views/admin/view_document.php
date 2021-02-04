<!DOCTYPE html>
<html>
<head>
	<title>Dokumen</title>
	 <link href="<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css')?>" rel="stylesheet">
</head>
<body>
<div class="container">
	
	<div class="col-md-12">
	<ol class="breadcrumb"><a href='<?php echo base_url('Document/add_document') ?>' class="btn btn-info">Tambah Document</a></ol>
		
		<table class="table table-bordered" id="document">
			<thead>
				
				<tr>
					<th>No</th>
					<th>Judul Dokument</th>
					<th>Deskripsi</th>
					<th>File</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php $no=1; foreach ($dokument as $tampil) {
				
			 ?>
				<tr>
					<td><?=$no++?></td>
					<td><?=$tampil->judul_document?></td>
					<td><?=$tampil->keterangan?></td>
					<td><a href='<?php echo base_url('assets/file_pdf/'.$tampil->file.'') ?>' class='btn btn-info'>Lihat File</a></td>
					<td><a href='' class='btn btn-success'>Edit</a> <a href='' class='btn btn-warning'>Hapus</a></td>
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

    table = $('#document').dataTable({
                rowsGroup: [
                    2    
                ],
                bProcessing: true,
                sAjaxSource: $('#document').data('url')
            }); 
            });    
</script>