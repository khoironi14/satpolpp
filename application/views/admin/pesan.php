<div class="container">
	<div class="col-row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					 <?php if ($this->session->flashdata('success')){ echo $this->session->flashdata('success');  }?>
					<table class="table table-konseded">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Email</th>
								<th>Alamat</th>
								<th>Judul</th>
								<th>Pesan</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($pesan as $tampil) {
								# code...
							 ?>
							<tr>
								<td><?=$tampil->nama?></td>
								<td><?=$tampil->email?></td>
								<td><?=$tampil->alamat?></td>
								<td><?=$tampil->judul?></td>
								<td><?=$tampil->pesan?></td>
								<td><a href="<?php echo base_url('Admin/hapus_pesan/'.$tampil->id_kontak.'') ?>" class="btn btn-danger btn-sm tombol-hapus">Hapus</a></td>
							</tr>
						<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
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