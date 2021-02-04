<!DOCTYPE html>
<html>
<head>
	<title>Berita</title>
	
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">
 <div class="card-header">
              <h3 class="card-title">Berita</h3>
               <?php if ($this->session->flashdata('success')){ echo $this->session->flashdata('success');  }?>
             <a href="<?php echo base_url('Admin/add_berita') ?>" class="btn btn-info rounded-pill float-right">Tambah Berita</a>	
            </div>

 <div class="card-body">
	
<table class="table table-bordered" id="table">
	<thead>
		
		<tr>
			<th>No</th>
			<th>Judul Berita</th>
			<th>isi Berita</th>
			<th>Kategori berita</th>
			<th width="15%">Opsi</th>
			
			

		</tr>
	</thead>
	<tbody>

	</tbody>
	


</table>


</div>

</div></div>
	</div>	

</div>
</body>
</html>

<script type="text/javascript">
	
	var table;
	$(document).ready(function(){
table=$('#table').DataTable({

"processing": true, 
            "serverSide": true, 
            "order": [], 
             
            "ajax": {
                "url": "<?php echo site_url('Admin/get_data_berita')?>",
                "type": "POST"
            },

            "columnDefs": [
            { 
                "targets": [ 0 ], 
                "orderable": false, 
            },

            ],


});

	});
</script>
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