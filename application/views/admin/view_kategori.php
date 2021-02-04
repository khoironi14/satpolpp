<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Kategori Berita</title>
	
</head>
<body>

<div class="row">
<div class="col-md-12">
	<div class="card">
<div class="card-header"><a href="<?php echo base_url('Admin/add_kategori') ?>" class="btn btn-info btn-sm float-right">Tambah Kategori</a></div>
        <div class="card-body">
		 <?php if ($this->session->flashdata('success')){ echo $this->session->flashdata('success');  }?>
 <center><h4>Data Kategori Berita</h4></center>
<table class="table table-bordered table-striped" id="kategori">	
<thead>	
<tr>	
<th>No</th>
<th>Kategori</th>
<th>Action</th>

</tr>

</thead>
<tbody>
<?php $no=1; foreach ($kategori as $tampil) {
	
 ?>
	<tr>	
			<td><?=$no++?></td>
			<td><?=$tampil->kategori?></td>
			<td><a href='<?php echo base_url('Admin/edit_kategori/'.$tampil->id.'') ?>' class='btn btn-info btn-sm rounded-pill'>Edit</a> <a href='<?php echo base_url('Admin/hapus_kategori/'.$tampil->id.'') ?>' class='btn btn-danger btn-sm rounded-pill tombol-hapus'>Hapus</a></td>

	</tr>
	<?php }?>
</tbody>

</table>

	</div>
	</div>
	</div></div>

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

    table = $('#kategori').dataTable({
                rowsGroup: [
                    2    
                ],
                bProcessing: true,
                sAjaxSource: $('#kategori').data('url')
            }); 
            });    
</script>