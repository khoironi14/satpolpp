<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<form action="<?php echo base_url('Pejabat/add_pejabat') ?>" method="post" enctype="multipart/form-data" >
						<div class="form-group">
							<label>Nama Jabatan</label>
							<input type="text" name="nama_jabatan" class="form-control" required="">
						</div>
						<div class="form-group">
							<label>NIP</label>
							<input type="text" name="nip" class="form-control" required="">
						</div>
						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama" class="form-control" required="">
						</div>
						<div class="form-group">
							<label>Golongan</label>
							<input type="text" name="golongan" class="form-control" required="">
						</div>
						
						<div class="form-group">
							<label>Kelas Jabatan</label>
							<input type="text" name="kelas" class="form-control" required="">
						</div>
						<div class="form-group">
							<label>Foto</label>
							<input type="file" name="foto" class="form-control">
						</div>
						<div class="form-group">
							<button name="simpan" class="btn btn-success">Simpan</button>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>