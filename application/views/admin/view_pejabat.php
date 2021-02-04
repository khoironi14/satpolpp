<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					 <?php if ($this->session->flashdata('success')){ echo $this->session->flashdata('success');  }?>
					<h5>Data Pejabat</h5> <a href="<?php echo base_url('Pejabat/add_pejabat') ?>" class="btn btn-success rounded-pill float-right">New</a>
				</div>
				<div class="card-body">
					

					<table class="table table-konseded " id="pejabat">
						
						<thead>
							<tr>
								<th>Nama Jabatan</th>
								<th>Nama PNS</th>
								<th>Gol</th>
								<th>NIP</th>
								<th>Kelas Jabatan</th>
								<th>Foto</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($pejabat as $tampil) {
								# code...
							 ?>
							<tr>
								
								<td><?=$tampil->nama_jabatan?></td>
								<td><?=$tampil->nama_pns?></td>
								<td><?=$tampil->gol?></td>
								<td><?=$tampil->nip?></td>
								<td><?=$tampil->kelas_jabatan?></td>
								<td><?php if ($tampil->foto !=="") {
									# code...
								 ?> <img src="<?php echo base_url('assets/gambar/'.$tampil->foto.'') ?>" class="img-thumbnail" alt="satpol" style="width:200px;"> <?php }else{?> <img src="<?php echo base_url('assets/gambar/user.png') ?>" class="img-thumbnail" style="width:200px;">  <?php }?></td>
								<td width="15%"><a href="<?php echo base_url('Pejabat/edit_pejabat/'.$tampil->id_struktural.'') ?>" class="btn btn-info btn-sm rounded-pill">Edit</a><a href="<?php echo base_url('Pejabat/hapus/'.$tampil->id_struktural.'') ?>" class="btn btn-danger btn-sm rounded-pill">Hapus</a></td>
							</tr>


						<?php }?>
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){

$('#pejabat').dataTable();

	});
</script>