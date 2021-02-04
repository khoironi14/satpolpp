<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
<div class="container">
	
	<div class="col-md-12">
		<div class="card">
 <div class="card-header">
              <h3 class="card-title">Gallery</h3>
               <?php if ($this->session->flashdata('success')){ echo $this->session->flashdata('success');  }?>
            <a href='<?php echo base_url('Gallery/add_gallery') ?>' class="btn btn-primary float-right">New Gallery</a>
            </div>

 <div class="card-body">
		
		<table class="table table-bordered" id="gallery">
		<thead>
			
			<tr>
				<th>No</th>
				<th>Judul</th>
				<th>Keterangan</th>
				<th>Foto</th>
				<th>Action</th>
			</tr>
		</thead>	
		<tbody>
		<?php $no=1; foreach ($gallery as $tampil) {
			
		 ?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$tampil->judul?></td>
				<td><?=$tampil->keterangan?></td>
				<td><img style="width:100px;" src="<?php echo base_url('assets/slider') ?>/<?=$tampil->foto?>"></td>
				
				<td width="15%"><a href='<?php echo base_url('Gallery/edit_gallery/'.$tampil->id.'') ?>' class='btn btn-success'>Edit</a> <a href='<?php echo base_url('Gallery/hapus_gallery/'.$tampil->id.'/'.$tampil->foto.'') ?>' class='btn btn-danger tombol-hapus'>Hapus</a></td>
			</tr>
			<?php }?>
		</tbody>


		</table>
		
	</div>
</div>
</div>
</div>
</body>
</html>
<script>
        $('.tombol-hapus').on('click', function(e) {

            e.preventDefault();
            const href = $(this).attr('href');

            Swal.fire({
                title: 'Konfirmasi Hapus',
                text: 'Data akan dihapus permanen',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus'
            }).then((result) => {
                if (result.value) {
                 
                  document.location.href = href;

                }
            })
        });
    </script>

<script type="text/javascript">
	$(document).ready(function(){
	var table ;

    table = $('#gallery').dataTable({
                rowsGroup: [
                    2    
                ],
                bProcessing: true,
                sAjaxSource: $('#gallery').data('url')
            }); 
            });    
</script>