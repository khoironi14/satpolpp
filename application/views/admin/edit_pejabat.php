<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<form action="<?php echo base_url('Pejabat/edit_pejabat') ?>" method="post" enctype="multipart/form-data" >
						<input type="hidden" name="id" value="<?=$edit['id_struktural']?>">
						<div class="form-group">
							<label>Nama Jabatan</label>
							<input type="text" name="nama_jabatan" value="<?=$edit['nama_jabatan']?>" class="form-control" required="">
						</div>
						<div class="form-group">
							<label>NIP</label>
							<input type="text" name="nip" value="<?=$edit['nip']?>" class="form-control" required="">
						</div>
						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama" class="form-control" value="<?=$edit['nama_pns']?>" required="">
						</div>
						<div class="form-group">
							<label>Golongan</label>
							<input type="text" name="golongan" value="<?=$edit['gol']?>" class="form-control" required="">
						</div>
						
						<div class="form-group">
							<label>Kelas Jabatan</label>
							<input type="text" name="kelas" value="<?=$edit['kelas_jabatan']?>" class="form-control" required="">
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